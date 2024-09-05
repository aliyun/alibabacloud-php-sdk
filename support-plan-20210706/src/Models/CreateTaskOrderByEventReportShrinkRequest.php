<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskOrderByEventReportShrinkRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $business;

    /**
     * @description This parameter is required.
     *
     * @example 小二
     *
     * @var string
     */
    public $createRealName;

    /**
     * @description This parameter is required.
     *
     * @example 1830426056957812
     *
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $eventBodyShrink;

    /**
     * @var string
     */
    public $extinfoShrink;

    /**
     * @example 紧急性原因描述
     *
     * @var string
     */
    public $importantDesc;

    /**
     * @example 123,456
     *
     * @var string
     */
    public $joinChildGroupUserIds;

    /**
     * @example 监控集如：视频业务的质量监控 123
     *
     * @var string
     */
    public $monitorCongregation;

    /**
     * @description This parameter is required.
     *
     * @example cid+lUpHxTIXt7DYqJDcpVxlA==
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 3270
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'business'              => 'Business',
        'createRealName'        => 'CreateRealName',
        'createUserId'          => 'CreateUserId',
        'eventBodyShrink'       => 'EventBody',
        'extinfoShrink'         => 'Extinfo',
        'importantDesc'         => 'ImportantDesc',
        'joinChildGroupUserIds' => 'JoinChildGroupUserIds',
        'monitorCongregation'   => 'MonitorCongregation',
        'openGroupId'           => 'OpenGroupId',
        'productType'           => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->createRealName) {
            $res['CreateRealName'] = $this->createRealName;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->eventBodyShrink) {
            $res['EventBody'] = $this->eventBodyShrink;
        }
        if (null !== $this->extinfoShrink) {
            $res['Extinfo'] = $this->extinfoShrink;
        }
        if (null !== $this->importantDesc) {
            $res['ImportantDesc'] = $this->importantDesc;
        }
        if (null !== $this->joinChildGroupUserIds) {
            $res['JoinChildGroupUserIds'] = $this->joinChildGroupUserIds;
        }
        if (null !== $this->monitorCongregation) {
            $res['MonitorCongregation'] = $this->monitorCongregation;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskOrderByEventReportShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['CreateRealName'])) {
            $model->createRealName = $map['CreateRealName'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['EventBody'])) {
            $model->eventBodyShrink = $map['EventBody'];
        }
        if (isset($map['Extinfo'])) {
            $model->extinfoShrink = $map['Extinfo'];
        }
        if (isset($map['ImportantDesc'])) {
            $model->importantDesc = $map['ImportantDesc'];
        }
        if (isset($map['JoinChildGroupUserIds'])) {
            $model->joinChildGroupUserIds = $map['JoinChildGroupUserIds'];
        }
        if (isset($map['MonitorCongregation'])) {
            $model->monitorCongregation = $map['MonitorCongregation'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
