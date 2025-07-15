<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;

use AlibabaCloud\Tea\Model;

class OSSParams extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example mytest-bucket
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description This parameter is required.
     *
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $OSSEndpoint;
    protected $_name = [
        'OSSBucket' => 'OSSBucket',
        'OSSEndpoint' => 'OSSEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSEndpoint) {
            $res['OSSEndpoint'] = $this->OSSEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSEndpoint'])) {
            $model->OSSEndpoint = $map['OSSEndpoint'];
        }

        return $model;
    }
}
