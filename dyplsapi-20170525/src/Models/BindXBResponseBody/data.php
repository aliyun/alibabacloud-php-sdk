<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindXBResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authId;
    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'authId' => 'AuthId',
        'telX'   => 'TelX',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
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
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
