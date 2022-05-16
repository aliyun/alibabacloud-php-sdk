<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @description 人群名称过滤。
     *
     * @var string
     */
    public $name;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 是否包含手机号过滤。
     *
     * @var bool
     */
    public $phoneNumber;

    /**
     * @description 人群备注过滤。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 来源过滤。
     *
     * @var int
     */
    public $source;

    /**
     * @description 审核状态过滤。
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'name'        => 'Name',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'phoneNumber' => 'PhoneNumber',
        'remark'      => 'Remark',
        'source'      => 'Source',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
