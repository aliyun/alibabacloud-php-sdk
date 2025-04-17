<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Input extends Model
{
    /**
     * @var InputOSS
     */
    public $OSS;
    protected $_name = [
        'OSS' => 'OSS',
    ];

    public function validate()
    {
        if (null !== $this->OSS) {
            $this->OSS->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OSS) {
            $res['OSS'] = null !== $this->OSS ? $this->OSS->toArray($noStream) : $this->OSS;
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
        if (isset($map['OSS'])) {
            $model->OSS = InputOSS::fromMap($map['OSS']);
        }

        return $model;
    }
}
