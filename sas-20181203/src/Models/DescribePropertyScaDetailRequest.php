<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScaDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $scaName;

    /**
     * @var string
     */
    public $searchInfo;

    /**
     * @var string
     */
    public $searchInfoSub;

    /**
     * @var string
     */
    public $searchItem;

    /**
     * @var string
     */
    public $searchItemSub;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'bizType'       => 'BizType',
        'currentPage'   => 'CurrentPage',
        'lang'          => 'Lang',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'remark'        => 'Remark',
        'scaName'       => 'ScaName',
        'searchInfo'    => 'SearchInfo',
        'searchInfoSub' => 'SearchInfoSub',
        'searchItem'    => 'SearchItem',
        'searchItemSub' => 'SearchItemSub',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scaName) {
            $res['ScaName'] = $this->scaName;
        }
        if (null !== $this->searchInfo) {
            $res['SearchInfo'] = $this->searchInfo;
        }
        if (null !== $this->searchInfoSub) {
            $res['SearchInfoSub'] = $this->searchInfoSub;
        }
        if (null !== $this->searchItem) {
            $res['SearchItem'] = $this->searchItem;
        }
        if (null !== $this->searchItemSub) {
            $res['SearchItemSub'] = $this->searchItemSub;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScaName'])) {
            $model->scaName = $map['ScaName'];
        }
        if (isset($map['SearchInfo'])) {
            $model->searchInfo = $map['SearchInfo'];
        }
        if (isset($map['SearchInfoSub'])) {
            $model->searchInfoSub = $map['SearchInfoSub'];
        }
        if (isset($map['SearchItem'])) {
            $model->searchItem = $map['SearchItem'];
        }
        if (isset($map['SearchItemSub'])) {
            $model->searchItemSub = $map['SearchItemSub'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
