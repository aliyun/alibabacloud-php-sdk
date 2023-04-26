<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\nonExistAIJobIds;
use AlibabaCloud\Tea\Model;

class ListAIJobResponseBody extends Model
{
    /**
     * @description The list of job IDs. You can obtain the job ID from the PlayInfo parameter in the response to the [GetPlayInfo](~~56124~~) operation.
     *
     * >  You can specify a maximum of 10 job IDs in a request. Separate multiple IDs with commas (,).
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @description The error code. This parameter is returned if the value of Status is fail.
     *
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;

    /**
     * @description The ID of the job.
     *
     * @example 8233A0E4-E112-44*****58-2BCED1B88173
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIJobList'        => 'AIJobList',
        'nonExistAIJobIds' => 'NonExistAIJobIds',
        'requestId'        => 'RequestId',
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
        if (null !== $this->nonExistAIJobIds) {
            $res['NonExistAIJobIds'] = null !== $this->nonExistAIJobIds ? $this->nonExistAIJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAIJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }
        if (isset($map['NonExistAIJobIds'])) {
            $model->nonExistAIJobIds = nonExistAIJobIds::fromMap($map['NonExistAIJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
