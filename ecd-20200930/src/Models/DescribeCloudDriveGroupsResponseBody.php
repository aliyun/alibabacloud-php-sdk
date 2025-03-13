<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponseBody\cloudDriveGroups;
use AlibabaCloud\Tea\Model;

class DescribeCloudDriveGroupsResponseBody extends Model
{
    /**
     * @description The list of team spaces.
     *
     * @var cloudDriveGroups[]
     */
    public $cloudDriveGroups;

    /**
     * @description The total number of entries returned.
     *
     * @example 0
     *
     * @var int
     */
    public $count;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example EF015AE5-B30A-5189-B519-735CEE40****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'cloudDriveGroups' => 'CloudDriveGroups',
        'count'            => 'Count',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudDriveGroups) {
            $res['CloudDriveGroups'] = [];
            if (null !== $this->cloudDriveGroups && \is_array($this->cloudDriveGroups)) {
                $n = 0;
                foreach ($this->cloudDriveGroups as $item) {
                    $res['CloudDriveGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDriveGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDriveGroups'])) {
            if (!empty($map['CloudDriveGroups'])) {
                $model->cloudDriveGroups = [];
                $n                       = 0;
                foreach ($map['CloudDriveGroups'] as $item) {
                    $model->cloudDriveGroups[$n++] = null !== $item ? cloudDriveGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
