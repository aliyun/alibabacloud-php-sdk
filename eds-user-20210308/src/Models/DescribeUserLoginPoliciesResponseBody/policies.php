<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserLoginPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserLoginPoliciesResponseBody\policies\userGroups;

class policies extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'name' => 'Name',
        'policyId' => 'PolicyId',
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->userGroups) {
            if (\is_array($this->userGroups)) {
                $res['UserGroups'] = [];
                $n1 = 0;
                foreach ($this->userGroups as $item1) {
                    $res['UserGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n1 = 0;
                foreach ($map['UserGroups'] as $item1) {
                    $model->userGroups[$n1] = userGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
