<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetMaterializedViewResponseBody extends Model
{
    /**
     * @var int
     */
    public $aggIntervalMins;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $originalSql;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'aggIntervalMins' => 'aggIntervalMins',
        'enabled' => 'enabled',
        'logstore' => 'logstore',
        'name' => 'name',
        'originalSql' => 'originalSql',
        'startTime' => 'startTime',
        'ttl' => 'ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggIntervalMins) {
            $res['aggIntervalMins'] = $this->aggIntervalMins;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->originalSql) {
            $res['originalSql'] = $this->originalSql;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
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
        if (isset($map['aggIntervalMins'])) {
            $model->aggIntervalMins = $map['aggIntervalMins'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['originalSql'])) {
            $model->originalSql = $map['originalSql'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
