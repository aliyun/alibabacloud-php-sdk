<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ApplyAntChainCertificateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $uploadReq;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'uploadReq'  => 'UploadReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->uploadReq) {
            $res['UploadReq'] = $this->uploadReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyAntChainCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['UploadReq'])) {
            $model->uploadReq = $map['UploadReq'];
        }

        return $model;
    }
}
