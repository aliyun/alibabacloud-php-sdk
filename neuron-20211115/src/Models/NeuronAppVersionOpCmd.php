<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronAppVersionOpCmd extends Model
{
    /**
     * @var int
     */
    public $appVersionId;
    protected $_name = [
        'appVersionId' => 'appVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersionId) {
            $res['appVersionId'] = $this->appVersionId;
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
        if (isset($map['appVersionId'])) {
            $model->appVersionId = $map['appVersionId'];
        }

        return $model;
    }
}
