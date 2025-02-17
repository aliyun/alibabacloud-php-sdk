<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults;

class AttachInstanceRamRoleResponseBody extends Model
{
    /**
     * @var attachInstanceRamRoleResults
     */
    public $attachInstanceRamRoleResults;
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
        'attachInstanceRamRoleResults' => 'AttachInstanceRamRoleResults',
        'failCount'                    => 'FailCount',
        'ramRoleName'                  => 'RamRoleName',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->attachInstanceRamRoleResults) {
            $this->attachInstanceRamRoleResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachInstanceRamRoleResults) {
            $res['AttachInstanceRamRoleResults'] = null !== $this->attachInstanceRamRoleResults ? $this->attachInstanceRamRoleResults->toArray($noStream) : $this->attachInstanceRamRoleResults;
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
