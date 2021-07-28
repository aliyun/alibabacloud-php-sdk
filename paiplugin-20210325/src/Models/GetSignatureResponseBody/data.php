<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models\GetSignatureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 签名归属方的三证合一，OSS地址
     *
     * @var string
     */
    public $certificates;

    /**
     * @description 创建时间 (UTC+8)
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 申请说明
     *
     * @var string
     */
    public $description;

    /**
     * @description ID UUID
     *
     * @var string
     */
    public $ID;

    /**
     * @description 签名名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 授权委托书(Power of attorney)， OSS地址
     *
     * @var string
     */
    public $powerOfAttorney;

    /**
     * @description 审核结果说明
     *
     * @var string
     */
    public $reason;

    /**
     * @description 审核状态
     * - 2 : 审核不通过
     * @var int
     */
    public $status;

    /**
     * @description 更新时间 (UTC+8)
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'certificates'    => 'Certificates',
        'createdTime'     => 'CreatedTime',
        'description'     => 'Description',
        'ID'              => 'ID',
        'name'            => 'Name',
        'powerOfAttorney' => 'PowerOfAttorney',
        'reason'          => 'Reason',
        'status'          => 'Status',
        'updatedTime'     => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = $this->certificates;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->powerOfAttorney) {
            $res['PowerOfAttorney'] = $this->powerOfAttorney;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            $model->certificates = $map['Certificates'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PowerOfAttorney'])) {
            $model->powerOfAttorney = $map['PowerOfAttorney'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
