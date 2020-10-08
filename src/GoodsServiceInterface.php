<?php
declare(strict_types=1);

namespace Overbeck\MallRpc;

/**
 * 商品服务
 *
 * Interface GoodsServiceInterface
 *
 * @package Overbeck\MallRpc
 * @author  ShuQingZai<929024757@qq.com> 2020/10/8 11:03
 */
interface GoodsServiceInterface
{
    /**
     * 获取列表
     *
     * @return array
     * @author ShuQingZai<929024757@qq.com>  2020/10/8 9:32
     */
    public function getList(): array;
}