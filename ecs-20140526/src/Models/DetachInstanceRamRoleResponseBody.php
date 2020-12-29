<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults;
use AlibabaCloud\Tea\Model;

class DetachInstanceRamRoleResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var detachInstanceRamRoleResults
     */
    public $detachInstanceRamRoleResults;
    protected $_name = [
        'totalCount'                   => 'TotalCount',
        'ramRoleName'                  => 'RamRoleName',
        'requestId'                    => 'RequestId',
        'failCount'                    => 'FailCount',
        'detachInstanceRamRoleResults' => 'DetachInstanceRamRoleResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->detachInstanceRamRoleResults) {
            $res['DetachInstanceRamRoleResults'] = null !== $this->detachInstanceRamRoleResults ? $this->detachInstanceRamRoleResults->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['DetachInstanceRamRoleResults'])) {
            $model->detachInstanceRamRoleResults = detachInstanceRamRoleResults::fromMap($map['DetachInstanceRamRoleResults']);
        }

        return $model;
    }
}
