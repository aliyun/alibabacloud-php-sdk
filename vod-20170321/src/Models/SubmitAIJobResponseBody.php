<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponseBody\AIJobList;
use AlibabaCloud\Tea\Model;

class SubmitAIJobResponseBody extends Model
{
    /**
     * @description The information about the AI jobs.
     *
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-BEF6-D73936****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIJobList' => 'AIJobList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIJobList) {
            $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
