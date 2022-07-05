<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\OssExternalStore;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description 您的AccessKey Secret。
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description 您的AccessKey ID。
     *
     * @var string
     */
    public $accessid;

    /**
     * @description oss 桶名称。
     *
     * @var string
     */
    public $bucket;

    /**
     * @description oss 的 endpoint 访问网址。
     *
     * @var string
     */
    public $endpoint;
    protected $_name = [
        'accessKey' => 'accessKey',
        'accessid'  => 'accessid',
        'bucket'    => 'bucket',
        'endpoint'  => 'endpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->accessid) {
            $res['accessid'] = $this->accessid;
        }
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['accessid'])) {
            $model->accessid = $map['accessid'];
        }
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        return $model;
    }
}
