<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetInstallCodeForUuidRequest extends Model
{
    /**
     * @description The UUID of the server for which the client installation code is to be queried.
     * This parameter is required.
     * @example eae0b46e-2155-422e-9565-ecc52c69****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstallCodeForUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
