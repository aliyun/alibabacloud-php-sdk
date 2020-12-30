<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\DownloadUnreachableContactsResponseBody;

use AlibabaCloud\Tea\Model;

class downloadParams extends Model
{
    /**
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
