<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults;

class DetachInstanceRamRoleResponseBody extends Model
{
    /**
     * @var detachInstanceRamRoleResults
     */
    public $detachInstanceRamRoleResults;

    /**
     * @var int
     */
    public $failCount;

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
    public $totalCount;
    protected $_name = [
        'detachInstanceRamRoleResults' => 'DetachInstanceRamRoleResults',
        'failCount' => 'FailCount',
        'ramRoleName' => 'RamRoleName',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->detachInstanceRamRoleResults) {
            $this->detachInstanceRamRoleResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachInstanceRamRoleResults) {
            $res['DetachInstanceRamRoleResults'] = null !== $this->detachInstanceRamRoleResults ? $this->detachInstanceRamRoleResults->toArray($noStream) : $this->detachInstanceRamRoleResults;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
