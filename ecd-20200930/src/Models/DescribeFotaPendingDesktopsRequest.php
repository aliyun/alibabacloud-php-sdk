<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFotaPendingDesktopsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskUid;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'taskUid'    => 'TaskUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFotaPendingDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskUid'])) {
            $model->taskUid = $map['TaskUid'];
        }

        return $model;
    }
}
