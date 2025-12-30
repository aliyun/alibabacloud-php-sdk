<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizMetricRequest\updateBizMetricCommand;

use AlibabaCloud\Dara\Model;

class viewScope extends Model
{
    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string[]
     */
    public $userGroupNames;

    /**
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'scopeType' => 'ScopeType',
        'userGroupNames' => 'UserGroupNames',
        'userNames' => 'UserNames',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupNames)) {
            Model::validateArray($this->userGroupNames);
        }
        if (\is_array($this->userNames)) {
            Model::validateArray($this->userNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        if (null !== $this->userGroupNames) {
            if (\is_array($this->userGroupNames)) {
                $res['UserGroupNames'] = [];
                $n1 = 0;
                foreach ($this->userGroupNames as $item1) {
                    $res['UserGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userNames) {
            if (\is_array($this->userNames)) {
                $res['UserNames'] = [];
                $n1 = 0;
                foreach ($this->userNames as $item1) {
                    $res['UserNames'][$n1] = $item1;
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
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        if (isset($map['UserGroupNames'])) {
            if (!empty($map['UserGroupNames'])) {
                $model->userGroupNames = [];
                $n1 = 0;
                foreach ($map['UserGroupNames'] as $item1) {
                    $model->userGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = [];
                $n1 = 0;
                foreach ($map['UserNames'] as $item1) {
                    $model->userNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
