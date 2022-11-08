<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class EnableDataReflowRequest extends Model
{
    /**
     * @var string
     */
    public $dataReflowOssPath;

    /**
     * @var int
     */
    public $dataReflowRate;

    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'dataReflowOssPath' => 'DataReflowOssPath',
        'dataReflowRate'    => 'DataReflowRate',
        'serviceId'         => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataReflowOssPath) {
            $res['DataReflowOssPath'] = $this->dataReflowOssPath;
        }
        if (null !== $this->dataReflowRate) {
            $res['DataReflowRate'] = $this->dataReflowRate;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableDataReflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataReflowOssPath'])) {
            $model->dataReflowOssPath = $map['DataReflowOssPath'];
        }
        if (isset($map['DataReflowRate'])) {
            $model->dataReflowRate = $map['DataReflowRate'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
