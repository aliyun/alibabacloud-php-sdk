<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class VersionWeight extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var float
     */
    public $weight;
    protected $_name = [
        'version' => 'version',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
