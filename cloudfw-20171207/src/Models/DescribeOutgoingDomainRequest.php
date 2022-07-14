<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeOutgoingDomainRequest extends Model
{
    /**
     * @description 分类, 枚举值.
     * NotAliYun (非云产品分类)
     * @var string
     */
    public $categoryId;

    /**
     * @description 当前页
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description 域名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 结束时间,Unix timestamp, 精确到秒
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 语言, 枚举值.
     * 可选值: en
     * @var string
     */
    public $lang;

    /**
     * @description 排序字段, 枚举值.
     * 可选值: InBytes, OutBytes,TotalBytes,SessionCount
     * @var string
     */
    public $order;

    /**
     * @description 每页条数, 不得超过100, 超过100会设置为100
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description 公网IP
     *
     * @var string
     */
    public $publicIP;

    /**
     * @description 顺序, 枚举值, 可选:asc, desc
     *
     * @var string
     */
    public $sort;

    /**
     * @description 开始时间,Unix timestamp, 精确到秒
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'currentPage' => 'CurrentPage',
        'domain'      => 'Domain',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
        'order'       => 'Order',
        'pageSize'    => 'PageSize',
        'publicIP'    => 'PublicIP',
        'sort'        => 'Sort',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOutgoingDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
