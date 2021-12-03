<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest\eventBody;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest\extinfo;
use AlibabaCloud\Tea\Model;

class CreateTaskOrderByEventReportRequest extends Model
{
    /**
     * @description 告警所属业务
     *
     * @var string
     */
    public $business;

    /**
     * @description 提交人姓名
     *
     * @var string
     */
    public $createRealName;

    /**
     * @description 提交人userId
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description 告警描述
     *
     * @var eventBody
     */
    public $eventBody;

    /**
     * @description 扩展信息
     *
     * @var extinfo[]
     */
    public $extinfo;

    /**
     * @description 当eventLevel为warn时，必传
     *
     * @var string
     */
    public $importantDesc;

    /**
     * @description 建单入群人员
     *
     * @var string
     */
    public $joinChildGroupUserIds;

    /**
     * @description 监控集如：视频业务的质量监控
     *
     * @var string
     */
    public $monitorCongregation;

    /**
     * @description 告警关联主群id
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description 问题分类
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'business'              => 'Business',
        'createRealName'        => 'CreateRealName',
        'createUserId'          => 'CreateUserId',
        'eventBody'             => 'EventBody',
        'extinfo'               => 'Extinfo',
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
        if (null !== $this->eventBody) {
            $res['EventBody'] = null !== $this->eventBody ? $this->eventBody->toMap() : null;
        }
        if (null !== $this->extinfo) {
            $res['Extinfo'] = [];
            if (null !== $this->extinfo && \is_array($this->extinfo)) {
                $n = 0;
                foreach ($this->extinfo as $item) {
                    $res['Extinfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateTaskOrderByEventReportRequest
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
            $model->eventBody = eventBody::fromMap($map['EventBody']);
        }
        if (isset($map['Extinfo'])) {
            if (!empty($map['Extinfo'])) {
                $model->extinfo = [];
                $n              = 0;
                foreach ($map['Extinfo'] as $item) {
                    $model->extinfo[$n++] = null !== $item ? extinfo::fromMap($item) : $item;
                }
            }
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
