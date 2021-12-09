<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListResponseBody\nonExistJobIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagJobListResponseBody\smarttagJobs;
use AlibabaCloud\Tea\Model;

class QuerySmarttagJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smarttagJobs
     */
    public $smarttagJobs;
    protected $_name = [
        'nextPageToken'  => 'NextPageToken',
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId'      => 'RequestId',
        'smarttagJobs'   => 'SmarttagJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smarttagJobs) {
            $res['SmarttagJobs'] = null !== $this->smarttagJobs ? $this->smarttagJobs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmarttagJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NonExistJobIds'])) {
            $model->nonExistJobIds = nonExistJobIds::fromMap($map['NonExistJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmarttagJobs'])) {
            $model->smarttagJobs = smarttagJobs::fromMap($map['SmarttagJobs']);
        }

        return $model;
    }
}
