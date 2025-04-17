<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponseBody\AIJobList;

class SubmitAIJobResponseBody extends Model
{
    /**
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIJobList' => 'AIJobList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIJobList) {
            $this->AIJobList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIJobList) {
            $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toArray($noStream) : $this->AIJobList;
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
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
