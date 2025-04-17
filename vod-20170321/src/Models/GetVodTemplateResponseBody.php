<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponseBody\vodTemplateInfo;

class GetVodTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vodTemplateInfo
     */
    public $vodTemplateInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'vodTemplateInfo' => 'VodTemplateInfo',
    ];

    public function validate()
    {
        if (null !== $this->vodTemplateInfo) {
            $this->vodTemplateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vodTemplateInfo) {
            $res['VodTemplateInfo'] = null !== $this->vodTemplateInfo ? $this->vodTemplateInfo->toArray($noStream) : $this->vodTemplateInfo;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VodTemplateInfo'])) {
            $model->vodTemplateInfo = vodTemplateInfo::fromMap($map['VodTemplateInfo']);
        }

        return $model;
    }
}
