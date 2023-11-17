<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopDeleteMaterialRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $materialId;
    protected $_name = [
        'jwtToken'   => 'JwtToken',
        'materialId' => 'MaterialId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopDeleteMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        return $model;
    }
}
