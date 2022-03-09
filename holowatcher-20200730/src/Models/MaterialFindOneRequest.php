<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class MaterialFindOneRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $materialId;
    protected $_name = [
        'aliyunJwt'  => 'AliyunJwt',
        'materialId' => 'MaterialId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaterialFindOneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        return $model;
    }
}
