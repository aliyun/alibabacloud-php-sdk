<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeletePrivateRegistryRequest extends Model
{
    /**
     * @description The ID of the image repository.
     *
     * This parameter is required.
     * @example 22233
     *
     * @var int
     */
    public $registryId;
    protected $_name = [
        'registryId' => 'RegistryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrivateRegistryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }

        return $model;
    }
}
