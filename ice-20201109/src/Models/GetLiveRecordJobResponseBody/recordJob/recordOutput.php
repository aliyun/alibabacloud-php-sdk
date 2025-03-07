<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobResponseBody\recordJob;

use AlibabaCloud\Tea\Model;

class recordOutput extends Model
{
    /**
     * @description The bucket name.
     *
     * @example imsbucket1
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The endpoint of the storage service.
     *
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The type of the storage address.
     *
     * Valid values:
     *
     *   vod
     *   oss
     *
     * @example oss
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket'   => 'Bucket',
        'endpoint' => 'Endpoint',
        'type'     => 'Type',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
