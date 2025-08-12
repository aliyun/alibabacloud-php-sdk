<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;

use AlibabaCloud\Dara\Model;

class OSSParams extends Model
{
    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSEndpoint;
    protected $_name = [
        'OSSBucket' => 'OSSBucket',
        'OSSEndpoint' => 'OSSEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
