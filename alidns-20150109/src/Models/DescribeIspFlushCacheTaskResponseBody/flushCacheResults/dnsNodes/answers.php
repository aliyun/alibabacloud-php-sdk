<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults\dnsNodes;

use AlibabaCloud\Dara\Model;

class answers extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $record;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'record' => 'Record',
        'ttl' => 'Ttl',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
