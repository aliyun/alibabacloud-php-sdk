<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ExportScriptResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signatureUrl) {
            $res['SignatureUrl'] = $this->signatureUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureUrl'])) {
            $model->signatureUrl = $map['SignatureUrl'];
        }

        return $model;
    }
}
