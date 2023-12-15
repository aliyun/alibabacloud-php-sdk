<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ApplyPublicAntChainRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $uploadReq;
    protected $_name = [
        'bizid'        => 'Bizid',
        'consortiumId' => 'ConsortiumId',
        'uploadReq'    => 'UploadReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->uploadReq) {
            $res['UploadReq'] = $this->uploadReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyPublicAntChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['UploadReq'])) {
            $model->uploadReq = $map['UploadReq'];
        }

        return $model;
    }
}
