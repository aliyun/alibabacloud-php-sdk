<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateMaterializedViewRequest extends Model
{
    /**
     * @var int
     */
    public $aggIntervalMins;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $originalSql;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'aggIntervalMins' => 'aggIntervalMins',
        'enable' => 'enable',
        'originalSql' => 'originalSql',
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

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->originalSql) {
            $res['originalSql'] = $this->originalSql;
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

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['originalSql'])) {
            $model->originalSql = $map['originalSql'];
        }

        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
