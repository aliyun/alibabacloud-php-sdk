<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;

class GenerateServiceLastAccessedDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $granularity;
    protected $_name = [
        'arn' => 'Arn',
        'granularity' => 'Granularity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }

        return $model;
    }
}
