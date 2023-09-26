<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkGenerateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Access Key ID
     *
     * @example bmqFUwnIDteQcXLoPTk4CsE3
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeyName;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeyName'   => 'accessKeyName',
        'accessKeySecret' => 'accessKeySecret',
        'userId'          => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeyName) {
            $res['accessKeyName'] = $this->accessKeyName;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['accessKeyName'])) {
            $model->accessKeyName = $map['accessKeyName'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
