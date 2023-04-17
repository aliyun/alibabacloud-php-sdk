<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults;
use AlibabaCloud\Tea\Model;

class DetachInstanceRamRoleResponseBody extends Model
{
    /**
     * @description Details about the results of detaching the instance RAM role from the instances.
     *
     * @var detachInstanceRamRoleResults
     */
    public $detachInstanceRamRoleResults;

    /**
     * @description The number of the instances from which the RAM role failed to be detached.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The name of the instance RAM role.
     *
     * @example RamRoleTest
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the instances from which you detached the RAM role.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detachInstanceRamRoleResults' => 'DetachInstanceRamRoleResults',
        'failCount'                    => 'FailCount',
        'ramRoleName'                  => 'RamRoleName',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detachInstanceRamRoleResults) {
            $res['DetachInstanceRamRoleResults'] = null !== $this->detachInstanceRamRoleResults ? $this->detachInstanceRamRoleResults->toMap() : null;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachInstanceRamRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetachInstanceRamRoleResults'])) {
            $model->detachInstanceRamRoleResults = detachInstanceRamRoleResults::fromMap($map['DetachInstanceRamRoleResults']);
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
