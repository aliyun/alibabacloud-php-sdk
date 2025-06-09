<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;

use AlibabaCloud\Dara\Model;

class resourceDirectory extends Model
{
    /**
     * @var string
     */
    public $accountGroupType;

    /**
     * @var string[]
     */
    public $members;
    protected $_name = [
        'accountGroupType' => 'accountGroupType',
        'members' => 'members',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountGroupType) {
            $res['accountGroupType'] = $this->accountGroupType;
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['members'][$n1++] = $item1;
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
        if (isset($map['accountGroupType'])) {
            $model->accountGroupType = $map['accountGroupType'];
        }

        if (isset($map['members'])) {
            if (!empty($map['members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['members'] as $item1) {
                    $model->members[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
