<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\databases;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\hostGroups;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\hosts;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\userGroups;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\users;

class rule extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @var string
     */
    public $effectiveEndTime;

    /**
     * @var string
     */
    public $effectiveStartTime;

    /**
     * @var hostGroups[]
     */
    public $hostGroups;

    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var userGroups[]
     */
    public $userGroups;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'comment' => 'Comment',
        'databases' => 'Databases',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'hostGroups' => 'HostGroups',
        'hosts' => 'Hosts',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'userGroups' => 'UserGroups',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (\is_array($this->hostGroups)) {
            Model::validateArray($this->hostGroups);
        }
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }

        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }

        if (null !== $this->hostGroups) {
            if (\is_array($this->hostGroups)) {
                $res['HostGroups'] = [];
                $n1 = 0;
                foreach ($this->hostGroups as $item1) {
                    $res['HostGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['Hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['Hosts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1] = databases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }

        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }

        if (isset($map['HostGroups'])) {
            if (!empty($map['HostGroups'])) {
                $model->hostGroups = [];
                $n1 = 0;
                foreach ($map['HostGroups'] as $item1) {
                    $model->hostGroups[$n1] = hostGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['Hosts'] as $item1) {
                    $model->hosts[$n1] = hosts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = users::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
