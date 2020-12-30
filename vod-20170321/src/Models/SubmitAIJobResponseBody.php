<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponseBody\AIJobList;
use AlibabaCloud\Tea\Model;

class SubmitAIJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AIJobList
     */
    public $AIJobList;
    protected $_name = [
        'requestId' => 'RequestId',
        'AIJobList' => 'AIJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->AIJobList) {
            $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }

        return $model;
    }
}
