<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ChangeInstanceAzoneRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $drdsRegionId;

    /**
     * @var string
     */
    public $originAzoneId;

    /**
     * @var string
     */
    public $targetAzoneId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'drdsRegionId'   => 'DrdsRegionId',
        'originAzoneId'  => 'OriginAzoneId',
        'targetAzoneId'  => 'TargetAzoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->drdsRegionId) {
            $res['DrdsRegionId'] = $this->drdsRegionId;
        }
        if (null !== $this->originAzoneId) {
            $res['OriginAzoneId'] = $this->originAzoneId;
        }
        if (null !== $this->targetAzoneId) {
            $res['TargetAzoneId'] = $this->targetAzoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeInstanceAzoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DrdsRegionId'])) {
            $model->drdsRegionId = $map['DrdsRegionId'];
        }
        if (isset($map['OriginAzoneId'])) {
            $model->originAzoneId = $map['OriginAzoneId'];
        }
        if (isset($map['TargetAzoneId'])) {
            $model->targetAzoneId = $map['TargetAzoneId'];
        }

        return $model;
    }
}
