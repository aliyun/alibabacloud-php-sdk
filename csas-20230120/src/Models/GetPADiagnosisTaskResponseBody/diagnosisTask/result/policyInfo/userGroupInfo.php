<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo;

use AlibabaCloud\Dara\Model;

class userGroupInfo extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string[]
     */
    public $group;

    /**
     * @var string
     */
    public $matchedUserGroups;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'email' => 'Email',
        'group' => 'Group',
        'matchedUserGroups' => 'MatchedUserGroups',
        'telephone' => 'Telephone',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->group)) {
            Model::validateArray($this->group);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->group) {
            if (\is_array($this->group)) {
                $res['Group'] = [];
                $n1 = 0;
                foreach ($this->group as $item1) {
                    $res['Group'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchedUserGroups) {
            $res['MatchedUserGroups'] = $this->matchedUserGroups;
        }

        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Group'])) {
            if (!empty($map['Group'])) {
                $model->group = [];
                $n1 = 0;
                foreach ($map['Group'] as $item1) {
                    $model->group[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchedUserGroups'])) {
            $model->matchedUserGroups = $map['MatchedUserGroups'];
        }

        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
