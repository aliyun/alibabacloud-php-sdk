<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\userAccount\options;

class userAccount extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountPlatform;

    /**
     * @var string
     */
    public $accountStructure;

    /**
     * @var int
     */
    public $durationSeconds;

    /**
     * @var string
     */
    public $empId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var options
     */
    public $options;

    /**
     * @var int
     */
    public $parentId;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountPlatform' => 'AccountPlatform',
        'accountStructure' => 'AccountStructure',
        'durationSeconds' => 'DurationSeconds',
        'empId' => 'EmpId',
        'expireTime' => 'ExpireTime',
        'loginName' => 'LoginName',
        'options' => 'Options',
        'parentId' => 'ParentId',
    ];

    public function validate()
    {
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountPlatform) {
            $res['AccountPlatform'] = $this->accountPlatform;
        }

        if (null !== $this->accountStructure) {
            $res['AccountStructure'] = $this->accountStructure;
        }

        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }

        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountPlatform'])) {
            $model->accountPlatform = $map['AccountPlatform'];
        }

        if (isset($map['AccountStructure'])) {
            $model->accountStructure = $map['AccountStructure'];
        }

        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }

        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
