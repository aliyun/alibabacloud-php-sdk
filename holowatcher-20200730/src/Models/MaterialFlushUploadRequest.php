<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class MaterialFlushUploadRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $materialId;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'aliyunJwt'  => 'AliyunJwt',
        'materialId' => 'MaterialId',
        'value'      => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaterialFlushUploadRequest
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
