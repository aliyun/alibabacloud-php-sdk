<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class Illustration extends Model
{
    /**
     * @var int
     */
    public $illustrationId;
    /**
     * @var string
     */
    public $oss;
    protected $_name = [
        'illustrationId' => 'illustrationId',
        'oss'            => 'oss',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->illustrationId) {
            $res['illustrationId'] = $this->illustrationId;
        }

        if (null !== $this->oss) {
            $res['oss'] = $this->oss;
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
        if (isset($map['illustrationId'])) {
            $model->illustrationId = $map['illustrationId'];
        }

        if (isset($map['oss'])) {
            $model->oss = $map['oss'];
        }

        return $model;
    }
}
