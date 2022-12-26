<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateRegistryListRequest extends Model
{
    /**
     * @example harbor
     *
     * @var string
     */
    public $registryType;
    protected $_name = [
        'registryType' => 'RegistryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateRegistryListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
