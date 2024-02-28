<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceSLSParameters extends Model
{
    /**
     * @description The consumer offset. The value begin specifies the earliest offset, and the value end specifies the latest offset. You can also specify a time in seconds to start consumption.
     *
     * @example end
     *
     * @var string
     */
    public $consumePosition;

    /**
     * @description The Log Service Logstore.
     *
     * @example sas-log
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The Log Service project.
     *
     * @example test
     *
     * @var string
     */
    public $project;

    /**
     * @description The role name. If you want to authorize EventBridge to use this role to read logs in Log Service, you must select Alibaba Cloud Service for Selected Trusted Entity and EventBridge for Select Trusted Service when you create the role in the Resource Access Management (RAM) console.
     *
     * @example testRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'consumePosition' => 'ConsumePosition',
        'logStore'        => 'LogStore',
        'project'         => 'Project',
        'roleName'        => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumePosition) {
            $res['ConsumePosition'] = $this->consumePosition;
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
