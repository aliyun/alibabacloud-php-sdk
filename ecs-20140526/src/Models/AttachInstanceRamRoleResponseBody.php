<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults;
use AlibabaCloud\Tea\Model;

class AttachInstanceRamRoleResponseBody extends Model
{
    /**
     * @var attachInstanceRamRoleResults[]
     */
    public $attachInstanceRamRoleResults;

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
    protected $_name = [
        'attachInstanceRamRoleResults' => 'AttachInstanceRamRoleResults',
        'totalCount'                   => 'TotalCount',
        'ramRoleName'                  => 'RamRoleName',
        'requestId'                    => 'RequestId',
        'failCount'                    => 'FailCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInstanceRamRoleResults) {
            $res['AttachInstanceRamRoleResults'] = [];
            if (null !== $this->attachInstanceRamRoleResults && \is_array($this->attachInstanceRamRoleResults)) {
                $n = 0;
                foreach ($this->attachInstanceRamRoleResults as $item) {
                    $res['AttachInstanceRamRoleResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
            if (!empty($map['AttachInstanceRamRoleResults'])) {
                $model->attachInstanceRamRoleResults = [];
                $n                                   = 0;
                foreach ($map['AttachInstanceRamRoleResults'] as $item) {
                    $model->attachInstanceRamRoleResults[$n++] = null !== $item ? attachInstanceRamRoleResults::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
