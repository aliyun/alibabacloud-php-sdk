<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponseBody\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponseBody\nonExistAIJobIds;
use AlibabaCloud\Tea\Model;

class ListMediaDNADeleteJobResponseBody extends Model
{
    /**
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;

    /**
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
     * @return ListMediaDNADeleteJobResponseBody
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
