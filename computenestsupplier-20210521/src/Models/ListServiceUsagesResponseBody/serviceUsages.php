<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponseBody;

use AlibabaCloud\Tea\Model;

class serviceUsages extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @example 2022-05-25T02:02:02Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example service-c9f36ec6d19b4exxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @example Submitted
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @example 2022-05-25T02:02:02Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 127383705958xxxx
     *
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
    }

    public function toMap()
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
            $res['UserInformation'] = $this->userInformation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceUsages
     */
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
            $model->userInformation = $map['UserInformation'];
        }

        return $model;
    }
}
