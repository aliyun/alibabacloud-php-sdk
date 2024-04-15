<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CDNTriggerConfig extends Model
{
    /**
     * @example CdnDomainStarted
     *
     * @var string
     */
    public $eventName;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $eventVersion;

    /**
     * @var string[][]
     */
    public $filter;

    /**
     * @example 缓存事件触发器
     *
     * @var string
     */
    public $notes;
    protected $_name = [
        'eventName'    => 'eventName',
        'eventVersion' => 'eventVersion',
        'filter'       => 'filter',
        'notes'        => 'notes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->eventVersion) {
            $res['eventVersion'] = $this->eventVersion;
        }
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CDNTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['eventVersion'])) {
            $model->eventVersion = $map['eventVersion'];
        }
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        return $model;
    }
}
