<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $isReplica;

    /**
     * @var bool
     */
    public $detach;

    /**
     * @var bool
     */
    public $hibernate;

    /**
     * @var bool
     */
    public $isolate;
    protected $_name = [
        'isReplica' => 'IsReplica',
        'detach' => 'Detach',
        'hibernate' => 'Hibernate',
        'isolate' => 'Isolate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isReplica) {
            $res['IsReplica'] = $this->isReplica;
        }

        if (null !== $this->detach) {
            $res['Detach'] = $this->detach;
        }

        if (null !== $this->hibernate) {
            $res['Hibernate'] = $this->hibernate;
        }

        if (null !== $this->isolate) {
            $res['Isolate'] = $this->isolate;
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
        if (isset($map['IsReplica'])) {
            $model->isReplica = $map['IsReplica'];
        }

        if (isset($map['Detach'])) {
            $model->detach = $map['Detach'];
        }

        if (isset($map['Hibernate'])) {
            $model->hibernate = $map['Hibernate'];
        }

        if (isset($map['Isolate'])) {
            $model->isolate = $map['Isolate'];
        }

        return $model;
    }
}
