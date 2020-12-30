<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\DownloadRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class mediaDownloadParam extends Model
{
    /**
     * @var string
     */
    public $signatureUrl;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'signatureUrl' => 'SignatureUrl',
        'fileName'     => 'FileName',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDownloadParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureUrl'])) {
            $model->signatureUrl = $map['SignatureUrl'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
