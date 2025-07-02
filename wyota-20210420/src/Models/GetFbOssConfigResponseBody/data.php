<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetFbOssConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $ossPolicy;

    /**
     * @var string
     */
    public $ossSignature;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'endPoint' => 'EndPoint',
        'ossPolicy' => 'OssPolicy',
        'ossSignature' => 'OssSignature',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        if (null !== $this->ossPolicy) {
            $res['OssPolicy'] = $this->ossPolicy;
        }

        if (null !== $this->ossSignature) {
            $res['OssSignature'] = $this->ossSignature;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        if (isset($map['OssPolicy'])) {
            $model->ossPolicy = $map['OssPolicy'];
        }

        if (isset($map['OssSignature'])) {
            $model->ossSignature = $map['OssSignature'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
