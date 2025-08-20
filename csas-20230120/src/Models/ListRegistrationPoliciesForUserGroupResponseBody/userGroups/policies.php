<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupResponseBody\userGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListRegistrationPoliciesForUserGroupResponseBody\userGroups\policies\limitDetail;

class policies extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var limitDetail[]
     */
    public $limitDetail;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyId;

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
    public $whitelist;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'limitDetail' => 'LimitDetail',
        'matchMode' => 'MatchMode',
        'name' => 'Name',
        'policyId' => 'PolicyId',
        'priority' => 'Priority',
        'status' => 'Status',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->limitDetail)) {
            Model::validateArray($this->limitDetail);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->limitDetail) {
            if (\is_array($this->limitDetail)) {
                $res['LimitDetail'] = [];
                $n1 = 0;
                foreach ($this->limitDetail as $item1) {
                    $res['LimitDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LimitDetail'])) {
            if (!empty($map['LimitDetail'])) {
                $model->limitDetail = [];
                $n1 = 0;
                foreach ($map['LimitDetail'] as $item1) {
                    $model->limitDetail[$n1] = limitDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
