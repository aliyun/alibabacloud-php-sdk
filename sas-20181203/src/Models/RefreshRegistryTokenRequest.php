<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RefreshRegistryTokenRequest extends Model
{
    /**
     * @description The ID of the image repository.
     *
     * >  You can call the [PageImageRegistry](~~PageImageRegistry~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $registryId;
    protected $_name = [
        'registryId' => 'RegistryId',
    ];

    public function validate() {}

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
     * @return RefreshRegistryTokenRequest
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
