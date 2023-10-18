<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\nonExistAIJobIds;
use AlibabaCloud\Tea\Model;

class ListAIJobResponseBody extends Model
{
    /**
     * @description The list of jobs.
     *
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @description The IDs of the jobs that do not exist.
     *
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;

    /**
     * @description The ID of the request.
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
