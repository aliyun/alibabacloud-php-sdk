<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateMediaDNALibResponseBody\AIDNALibInfo;

class CreateMediaDNALibResponseBody extends Model
{
    /**
     * @var AIDNALibInfo
     */
    public $AIDNALibInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIDNALibInfo' => 'AIDNALibInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIDNALibInfo) {
            $this->AIDNALibInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIDNALibInfo) {
            $res['AIDNALibInfo'] = null !== $this->AIDNALibInfo ? $this->AIDNALibInfo->toArray($noStream) : $this->AIDNALibInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AIDNALibInfo'])) {
            $model->AIDNALibInfo = AIDNALibInfo::fromMap($map['AIDNALibInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
