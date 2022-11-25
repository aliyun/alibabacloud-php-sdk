<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\CheckDatasetOssBucketCORSResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $ossBucketCORSConfigUrl;

    /**
     * @var bool
     */
    public $setOssBucketCORSFlag;
    protected $_name = [
        'bucket'                 => 'Bucket',
        'ossBucketCORSConfigUrl' => 'OssBucketCORSConfigUrl',
        'setOssBucketCORSFlag'   => 'SetOssBucketCORSFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->ossBucketCORSConfigUrl) {
            $res['OssBucketCORSConfigUrl'] = $this->ossBucketCORSConfigUrl;
        }
        if (null !== $this->setOssBucketCORSFlag) {
            $res['SetOssBucketCORSFlag'] = $this->setOssBucketCORSFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['OssBucketCORSConfigUrl'])) {
            $model->ossBucketCORSConfigUrl = $map['OssBucketCORSConfigUrl'];
        }
        if (isset($map['SetOssBucketCORSFlag'])) {
            $model->setOssBucketCORSFlag = $map['SetOssBucketCORSFlag'];
        }

        return $model;
    }
}
