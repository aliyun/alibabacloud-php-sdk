<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIConfigCreateRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'dbName' => 'DbName',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
