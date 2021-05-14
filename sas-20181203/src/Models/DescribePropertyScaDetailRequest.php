<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScaDetailRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $searchItem;

    /**
     * @var string
     */
    public $searchInfo;

    /**
     * @var string
     */
    public $scaName;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $searchItemSub;

    /**
     * @var string
     */
    public $searchInfoSub;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $name;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'lang'          => 'Lang',
        'searchItem'    => 'SearchItem',
        'searchInfo'    => 'SearchInfo',
        'scaName'       => 'ScaName',
        'bizType'       => 'BizType',
        'searchItemSub' => 'SearchItemSub',
        'searchInfoSub' => 'SearchInfoSub',
        'remark'        => 'Remark',
        'name'          => 'Name',
        'uuid'          => 'Uuid',
        'currentPage'   => 'CurrentPage',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->scaName) {
            $res['ScaName'] = $this->scaName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->searchItemSub) {
            $res['SearchItemSub'] = $this->searchItemSub;
        }
        if (null !== $this->searchInfoSub) {
            $res['SearchInfoSub'] = $this->searchInfoSub;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyScaDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['ScaName'])) {
            $model->scaName = $map['ScaName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['SearchItemSub'])) {
            $model->searchItemSub = $map['SearchItemSub'];
        }
        if (isset($map['SearchInfoSub'])) {
            $model->searchInfoSub = $map['SearchInfoSub'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
