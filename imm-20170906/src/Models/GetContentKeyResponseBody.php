<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetContentKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $keyInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'keyInfos'  => 'KeyInfos',
        'requestId' => 'RequestId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyInfos) {
            $res['KeyInfos'] = $this->keyInfos;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContentKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyInfos'])) {
            $model->keyInfos = $map['KeyInfos'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
