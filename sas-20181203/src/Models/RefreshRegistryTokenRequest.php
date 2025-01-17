<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class RefreshRegistryTokenRequest extends Model
{
    /**
     * @var int
     */
    public $registryId;
    protected $_name = [
        'registryId' => 'RegistryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
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
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }

        return $model;
    }
}
