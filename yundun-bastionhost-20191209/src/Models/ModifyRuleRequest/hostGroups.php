<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyRuleRequest;

use AlibabaCloud\Dara\Model;

class hostGroups extends Model
{
    /**
     * @var string[]
     */
    public $hostAccountNames;

    /**
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId' => 'HostGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->hostAccountNames)) {
            Model::validateArray($this->hostAccountNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccountNames) {
            if (\is_array($this->hostAccountNames)) {
                $res['HostAccountNames'] = [];
                $n1 = 0;
                foreach ($this->hostAccountNames as $item1) {
                    $res['HostAccountNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = [];
                $n1 = 0;
                foreach ($map['HostAccountNames'] as $item1) {
                    $model->hostAccountNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        return $model;
    }
}
