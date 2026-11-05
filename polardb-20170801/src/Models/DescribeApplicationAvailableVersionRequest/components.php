<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableVersionRequest;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $componentClass;

    /**
     * @var int
     */
    public $componentMaxReplica;

    /**
     * @var int
     */
    public $componentReplica;

    /**
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentClass' => 'ComponentClass',
        'componentMaxReplica' => 'ComponentMaxReplica',
        'componentReplica' => 'ComponentReplica',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentClass) {
            $res['ComponentClass'] = $this->componentClass;
        }

        if (null !== $this->componentMaxReplica) {
            $res['ComponentMaxReplica'] = $this->componentMaxReplica;
        }

        if (null !== $this->componentReplica) {
            $res['ComponentReplica'] = $this->componentReplica;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
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
        if (isset($map['ComponentClass'])) {
            $model->componentClass = $map['ComponentClass'];
        }

        if (isset($map['ComponentMaxReplica'])) {
            $model->componentMaxReplica = $map['ComponentMaxReplica'];
        }

        if (isset($map['ComponentReplica'])) {
            $model->componentReplica = $map['ComponentReplica'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}
