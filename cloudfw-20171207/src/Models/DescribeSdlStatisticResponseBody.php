<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp;

class DescribeSdlStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdlStatisticResp
     */
    public $sdlStatisticResp;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdlStatisticResp' => 'SdlStatisticResp',
    ];

    public function validate()
    {
        if (null !== $this->sdlStatisticResp) {
            $this->sdlStatisticResp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sdlStatisticResp) {
            $res['SdlStatisticResp'] = null !== $this->sdlStatisticResp ? $this->sdlStatisticResp->toArray($noStream) : $this->sdlStatisticResp;
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

        if (isset($map['SdlStatisticResp'])) {
            $model->sdlStatisticResp = sdlStatisticResp::fromMap($map['SdlStatisticResp']);
        }

        return $model;
    }
}
