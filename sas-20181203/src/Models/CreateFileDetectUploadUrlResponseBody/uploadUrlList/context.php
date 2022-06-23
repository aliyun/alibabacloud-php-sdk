<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList;

use AlibabaCloud\Tea\Model;

class context extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'  => 'AccessId',
        'ossKey'    => 'OssKey',
        'policy'    => 'Policy',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return context
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
