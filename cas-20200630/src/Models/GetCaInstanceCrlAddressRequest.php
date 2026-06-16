<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class GetCaInstanceCrlAddressRequest extends Model
{
    /**
     * @var string
     */
    public $caIdentifier;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'caIdentifier' => 'CaIdentifier',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caIdentifier) {
            $res['CaIdentifier'] = $this->caIdentifier;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CaIdentifier'])) {
            $model->caIdentifier = $map['CaIdentifier'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
