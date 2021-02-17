<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetContentKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $keyInfos;
    protected $_name = [
        'versionId' => 'VersionId',
        'requestId' => 'RequestId',
        'keyInfos'  => 'KeyInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyInfos) {
            $res['KeyInfos'] = $this->keyInfos;
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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyInfos'])) {
            $model->keyInfos = $map['KeyInfos'];
        }

        return $model;
    }
}
