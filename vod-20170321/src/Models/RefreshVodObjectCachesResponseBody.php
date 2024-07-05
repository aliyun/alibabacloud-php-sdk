<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshVodObjectCachesResponseBody extends Model
{
    /**
     * @description The ID of the refresh task. Multiple IDs are separated by commas (,). Refresh tasks are merged based on the following rules:
     *
     * If the tasks are set for the same accelerated domain name, submitted within the same second, and refresh content based on URLs instead of directories, the tasks IDs are merged into the same task ID (RefreshTaskId). If the number of these tasks exceeds 2,000, every 2,000 tasks IDs are merged into the same task ID (RefreshTaskId).
     * @example 70422*****2904
     *
     * @var string
     */
    public $refreshTaskId;

    /**
     * @description The request ID.
     *
     * @example D61E4801-EAFF-4A63-****-FBF6CE1CFD1C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'refreshTaskId' => 'RefreshTaskId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshTaskId) {
            $res['RefreshTaskId'] = $this->refreshTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshVodObjectCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshTaskId'])) {
            $model->refreshTaskId = $map['RefreshTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
