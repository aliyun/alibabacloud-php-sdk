<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListDagsRequest extends Model
{
    /**
     * @var int
     */
    public $opSeq;
    /**
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'opSeq'      => 'OpSeq',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opSeq) {
            $res['OpSeq'] = $this->opSeq;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
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
        if (isset($map['OpSeq'])) {
            $model->opSeq = $map['OpSeq'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
