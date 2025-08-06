<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList;

class GetMTSStatisResponseBody extends Model
{
    /**
     * @var MTSStatisBySpecList
     */
    public $MTSStatisBySpecList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MTSStatisBySpecList' => 'MTSStatisBySpecList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->MTSStatisBySpecList) {
            $this->MTSStatisBySpecList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MTSStatisBySpecList) {
            $res['MTSStatisBySpecList'] = null !== $this->MTSStatisBySpecList ? $this->MTSStatisBySpecList->toArray($noStream) : $this->MTSStatisBySpecList;
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
        if (isset($map['MTSStatisBySpecList'])) {
            $model->MTSStatisBySpecList = MTSStatisBySpecList::fromMap($map['MTSStatisBySpecList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
