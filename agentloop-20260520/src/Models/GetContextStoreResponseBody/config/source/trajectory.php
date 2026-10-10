<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\trajectory\filter;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\trajectory\scopeMapping;

class trajectory extends Model
{
    /**
     * @var filter
     */
    public $filter;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var int
     */
    public $pollIntervalSeconds;

    /**
     * @var scopeMapping
     */
    public $scopeMapping;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'filter' => 'filter',
        'logstore' => 'logstore',
        'pollIntervalSeconds' => 'pollIntervalSeconds',
        'scopeMapping' => 'scopeMapping',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->scopeMapping) {
            $this->scopeMapping->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->pollIntervalSeconds) {
            $res['pollIntervalSeconds'] = $this->pollIntervalSeconds;
        }

        if (null !== $this->scopeMapping) {
            $res['scopeMapping'] = null !== $this->scopeMapping ? $this->scopeMapping->toArray($noStream) : $this->scopeMapping;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['pollIntervalSeconds'])) {
            $model->pollIntervalSeconds = $map['pollIntervalSeconds'];
        }

        if (isset($map['scopeMapping'])) {
            $model->scopeMapping = scopeMapping::fromMap($map['scopeMapping']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
