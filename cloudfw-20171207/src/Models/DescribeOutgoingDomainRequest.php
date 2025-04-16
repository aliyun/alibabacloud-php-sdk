<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeOutgoingDomainRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tagIdNew;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'currentPage' => 'CurrentPage',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'publicIP' => 'PublicIP',
        'sort' => 'Sort',
        'startTime' => 'StartTime',
        'tagIdNew' => 'TagIdNew',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tagIdNew) {
            $res['TagIdNew'] = $this->tagIdNew;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['TagIdNew'])) {
            $model->tagIdNew = $map['TagIdNew'];
        }

        return $model;
    }
}
