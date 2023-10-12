<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\IpRecord\detail;
use AlibabaCloud\Tea\Model;

class IpRecord extends Model
{
    /**
     * @example 互联地址
     *
     * @var string
     */
    public $businessTypeName;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 张三
     *
     * @var string
     */
    public $creator;

    /**
     * @example 备注
     *
     * @var string
     */
    public $description;

    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $ipBlock;

    /**
     * @var string[]
     */
    public $ipCode;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $ipRecordId;

    /**
     * @example Apply
     *
     * @var string
     */
    public $recodeType;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 西安百城
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'businessTypeName' => 'BusinessTypeName',
        'createTime'       => 'CreateTime',
        'creator'          => 'Creator',
        'description'      => 'Description',
        'detail'           => 'Detail',
        'ipBlock'          => 'IpBlock',
        'ipCode'           => 'IpCode',
        'ipRecordId'       => 'IpRecordId',
        'recodeType'       => 'RecodeType',
        'status'           => 'Status',
        'updateTime'       => 'UpdateTime',
        'zoneName'         => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipBlock) {
            $res['IpBlock'] = $this->ipBlock;
        }
        if (null !== $this->ipCode) {
            $res['IpCode'] = $this->ipCode;
        }
        if (null !== $this->ipRecordId) {
            $res['IpRecordId'] = $this->ipRecordId;
        }
        if (null !== $this->recodeType) {
            $res['RecodeType'] = $this->recodeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IpRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IpBlock'])) {
            $model->ipBlock = $map['IpBlock'];
        }
        if (isset($map['IpCode'])) {
            if (!empty($map['IpCode'])) {
                $model->ipCode = $map['IpCode'];
            }
        }
        if (isset($map['IpRecordId'])) {
            $model->ipRecordId = $map['IpRecordId'];
        }
        if (isset($map['RecodeType'])) {
            $model->recodeType = $map['RecodeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
