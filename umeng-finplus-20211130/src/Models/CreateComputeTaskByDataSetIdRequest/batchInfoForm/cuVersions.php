<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdRequest\batchInfoForm;

use AlibabaCloud\Tea\Model;

class cuVersions extends Model
{
    /**
     * @var string
     */
    public $cuId;

    /**
     * @var string
     */
    public $cuVersion;
    protected $_name = [
        'cuId'      => 'CuId',
        'cuVersion' => 'CuVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cuId) {
            $res['CuId'] = $this->cuId;
        }
        if (null !== $this->cuVersion) {
            $res['CuVersion'] = $this->cuVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cuVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CuId'])) {
            $model->cuId = $map['CuId'];
        }
        if (isset($map['CuVersion'])) {
            $model->cuVersion = $map['CuVersion'];
        }

        return $model;
    }
}
