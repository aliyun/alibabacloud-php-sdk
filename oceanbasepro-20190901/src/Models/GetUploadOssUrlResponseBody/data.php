<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\GetUploadOssUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $expectedExpirationTime;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'expectedExpirationTime' => 'ExpectedExpirationTime',
        'ossKey' => 'OssKey',
        'ossUrl' => 'OssUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectedExpirationTime) {
            $res['ExpectedExpirationTime'] = $this->expectedExpirationTime;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
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
        if (isset($map['ExpectedExpirationTime'])) {
            $model->expectedExpirationTime = $map['ExpectedExpirationTime'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
