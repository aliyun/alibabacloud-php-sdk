<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponseBody\confInfo;

class QueryConferenceInfoResponseBody extends Model
{
    /**
     * @var confInfo
     */
    public $confInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'confInfo'  => 'confInfo',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->confInfo) {
            $this->confInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confInfo) {
            $res['confInfo'] = null !== $this->confInfo ? $this->confInfo->toArray($noStream) : $this->confInfo;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['confInfo'])) {
            $model->confInfo = confInfo::fromMap($map['confInfo']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
