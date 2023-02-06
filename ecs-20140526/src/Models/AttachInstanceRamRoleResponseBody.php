<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults;
use AlibabaCloud\Tea\Model;

class AttachInstanceRamRoleResponseBody extends Model
{
    /**
     * @description Details about the results of attaching the instance RAM role.
     *
     * @var attachInstanceRamRoleResults
     */
    public $attachInstanceRamRoleResults;

    /**
     * @description The number of the instances to which the instance RAM role failed to be attached.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The name of the instance RAM role.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the request.
     *
     * @example D9553E4C-6C3A-4D66-AE79-9835AF705639
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of instances to which you attempted to attach the instance RAM role.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'attachInstanceRamRoleResults' => 'AttachInstanceRamRoleResults',
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
        if (null !== $this->attachInstanceRamRoleResults) {
            $res['AttachInstanceRamRoleResults'] = null !== $this->attachInstanceRamRoleResults ? $this->attachInstanceRamRoleResults->toMap() : null;
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
     * @return AttachInstanceRamRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInstanceRamRoleResults'])) {
            $model->attachInstanceRamRoleResults = attachInstanceRamRoleResults::fromMap($map['AttachInstanceRamRoleResults']);
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
