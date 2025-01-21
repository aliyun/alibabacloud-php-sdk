<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponseBody;

use AlibabaCloud\Dara\Model;

class serviceUsages extends Model
{
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $supplierName;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var int
     */
    public $userAliUid;
    /**
     * @var string[]
     */
    public $userInformation;
    protected $_name = [
        'comments'        => 'Comments',
        'createTime'      => 'CreateTime',
        'serviceId'       => 'ServiceId',
        'serviceName'     => 'ServiceName',
        'status'          => 'Status',
        'supplierName'    => 'SupplierName',
        'updateTime'      => 'UpdateTime',
        'userAliUid'      => 'UserAliUid',
        'userInformation' => 'UserInformation',
    ];

    public function validate()
    {
        if (\is_array($this->userInformation)) {
            Model::validateArray($this->userInformation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userAliUid) {
            $res['UserAliUid'] = $this->userAliUid;
        }

        if (null !== $this->userInformation) {
            if (\is_array($this->userInformation)) {
                $res['UserInformation'] = [];
                foreach ($this->userInformation as $key1 => $value1) {
                    $res['UserInformation'][$key1] = $value1;
                }
            }
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserAliUid'])) {
            $model->userAliUid = $map['UserAliUid'];
        }

        if (isset($map['UserInformation'])) {
            if (!empty($map['UserInformation'])) {
                $model->userInformation = [];
                foreach ($map['UserInformation'] as $key1 => $value1) {
                    $model->userInformation[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
