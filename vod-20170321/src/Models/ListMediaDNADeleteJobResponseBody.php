<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponseBody\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponseBody\nonExistAIJobIds;
use AlibabaCloud\Tea\Model;

class ListMediaDNADeleteJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;

    /**
     * @var AIJobList
     */
    public $AIJobList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'nonExistAIJobIds' => 'NonExistAIJobIds',
        'AIJobList'        => 'AIJobList',
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
        if (null !== $this->nonExistAIJobIds) {
            $res['NonExistAIJobIds'] = null !== $this->nonExistAIJobIds ? $this->nonExistAIJobIds->toMap() : null;
        }
        if (null !== $this->AIJobList) {
            $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaDNADeleteJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistAIJobIds'])) {
            $model->nonExistAIJobIds = nonExistAIJobIds::fromMap($map['NonExistAIJobIds']);
        }
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }

        return $model;
    }
}
