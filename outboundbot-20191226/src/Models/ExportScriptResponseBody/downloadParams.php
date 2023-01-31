<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ExportScriptResponseBody;

use AlibabaCloud\Tea\Model;

class downloadParams extends Model
{
    /**
     * @example http://tiangong-staging.oss-cn-shanghai.aliyuncs.com/record/281eb174-3865-41c1-9274-7b6813edadab.wav?Expires=1578624046&OSSAccessKeyId=LTAI****cqw&Signature=dL2dxWS6VcdZrvG9xOMOBMSP3Fg%3D
     *
     * @var string
     */
    public $signatureUrl;
    protected $_name = [
        'signatureUrl' => 'SignatureUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signatureUrl) {
            $res['SignatureUrl'] = $this->signatureUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureUrl'])) {
            $model->signatureUrl = $map['SignatureUrl'];
        }

        return $model;
    }
}
