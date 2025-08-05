<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceSLSParameters extends Model
{
    /**
     * @description The consumer offset. The value begin indicates the earliest offset. The value end indicates the latest offset. You can also specify a time in seconds to start message consumption.
     *
     * @example begin
     *
     * @var string
     */
    public $consumePosition;

    /**
     * @description The group ID of the consumer that subscribes to the topic.
     *
     * @example go-dts-shelf-group
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The Simple Log Service Logstore.
     *
     * @example waf-logstore
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The Simple Log Service project.
     *
     * @example dmmzk
     *
     * @var string
     */
    public $project;

    /**
     * @description The role name. If you want to authorize EventBridge to use this role to read logs in Simple Log Service, you must select Alibaba Cloud Service for Selected Trusted Entity and EventBridge for Select Trusted Service when you create the role in the Resource Access Management (RAM) console.
     *
     * @example testRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'consumePosition' => 'ConsumePosition',
        'consumerGroup' => 'ConsumerGroup',
        'logStore' => 'LogStore',
        'project' => 'Project',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumePosition) {
            $res['ConsumePosition'] = $this->consumePosition;
        }
        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceSLSParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumePosition'])) {
            $model->consumePosition = $map['ConsumePosition'];
        }
        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
