<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListPrivateRegistryListRequest extends Model
{
    /**
     * @var string
     */
    public $registryType;
    protected $_name = [
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
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
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
