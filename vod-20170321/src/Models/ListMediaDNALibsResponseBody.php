<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNALibsResponseBody\AIDNALibInfoList;

class ListMediaDNALibsResponseBody extends Model
{
    /**
     * @var AIDNALibInfoList
     */
    public $AIDNALibInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIDNALibInfoList' => 'AIDNALibInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIDNALibInfoList) {
            $this->AIDNALibInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIDNALibInfoList) {
            $res['AIDNALibInfoList'] = null !== $this->AIDNALibInfoList ? $this->AIDNALibInfoList->toArray($noStream) : $this->AIDNALibInfoList;
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
        if (isset($map['AIDNALibInfoList'])) {
            $model->AIDNALibInfoList = AIDNALibInfoList::fromMap($map['AIDNALibInfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
