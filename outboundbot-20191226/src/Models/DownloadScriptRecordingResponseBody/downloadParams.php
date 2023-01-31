<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DownloadScriptRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class downloadParams extends Model
{
    /**
     * @example 281eb174-3865-41c1-9274-7b6813edadab.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example http://tiangong-staging.oss-cn-shanghai.aliyuncs.com/record/281eb174-3865-41c1-9274-7b6813edadab.wav?Expires=1578624046&OSSAccessKeyId=LTAI****cqw&Signature=dL2dxWS6VcdZrvG9xOMOBMSP3Fg%3D
     *
     * @var string
     */
    public $signatureUrl;
    protected $_name = [
        'fileName'     => 'FileName',
        'signatureUrl' => 'SignatureUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['SignatureUrl'])) {
            $model->signatureUrl = $map['SignatureUrl'];
        }

        return $model;
    }
}
