<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyRequest\companyLimitCount;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyRequest\personalLimitCount;

class CreateRegistrationPolicyRequest extends Model
{
    /**
     * @var companyLimitCount
     */
    public $companyLimitCount;
    /**
     * @var string
     */
    public $companyLimitType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $matchMode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var personalLimitCount
     */
    public $personalLimitCount;
    /**
     * @var string
     */
    public $personalLimitType;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string[]
     */
    public $userGroupIds;
    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'companyLimitCount'  => 'CompanyLimitCount',
        'companyLimitType'   => 'CompanyLimitType',
        'description'        => 'Description',
        'matchMode'          => 'MatchMode',
        'name'               => 'Name',
        'personalLimitCount' => 'PersonalLimitCount',
        'personalLimitType'  => 'PersonalLimitType',
        'priority'           => 'Priority',
        'status'             => 'Status',
        'userGroupIds'       => 'UserGroupIds',
        'whitelist'          => 'Whitelist',
    ];

    public function validate()
    {
        if (null !== $this->companyLimitCount) {
            $this->companyLimitCount->validate();
        }
        if (null !== $this->personalLimitCount) {
            $this->personalLimitCount->validate();
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyLimitCount) {
            $res['CompanyLimitCount'] = null !== $this->companyLimitCount ? $this->companyLimitCount->toArray($noStream) : $this->companyLimitCount;
        }

        if (null !== $this->companyLimitType) {
            $res['CompanyLimitType'] = $this->companyLimitType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->personalLimitCount) {
            $res['PersonalLimitCount'] = null !== $this->personalLimitCount ? $this->personalLimitCount->toArray($noStream) : $this->personalLimitCount;
        }

        if (null !== $this->personalLimitType) {
            $res['PersonalLimitType'] = $this->personalLimitType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1                  = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1               = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CompanyLimitCount'])) {
            $model->companyLimitCount = companyLimitCount::fromMap($map['CompanyLimitCount']);
        }

        if (isset($map['CompanyLimitType'])) {
            $model->companyLimitType = $map['CompanyLimitType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PersonalLimitCount'])) {
            $model->personalLimitCount = personalLimitCount::fromMap($map['PersonalLimitCount']);
        }

        if (isset($map['PersonalLimitType'])) {
            $model->personalLimitType = $map['PersonalLimitType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1                  = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1               = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
