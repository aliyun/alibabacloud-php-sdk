<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DeleteFabricChaincodeRequest extends Model
{
    /**
     * @example code-sacc-1pr09q7jm****
     *
     * @var string
     */
    public $chaincodeId;
    protected $_name = [
        'chaincodeId' => 'ChaincodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFabricChaincodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }

        return $model;
    }
}
