<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyRuleRequest;

use AlibabaCloud\Dara\Model;

class hosts extends Model
{
    /**
     * @var string[]
     */
    public $hostAccountIds;

    /**
     * @var string
     */
    public $hostId;
    protected $_name = [
        'hostAccountIds' => 'HostAccountIds',
        'hostId' => 'HostId',
    ];

    public function validate()
    {
        if (\is_array($this->hostAccountIds)) {
            Model::validateArray($this->hostAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccountIds) {
            if (\is_array($this->hostAccountIds)) {
                $res['HostAccountIds'] = [];
                $n1 = 0;
                foreach ($this->hostAccountIds as $item1) {
                    $res['HostAccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
        if (isset($map['HostAccountIds'])) {
            if (!empty($map['HostAccountIds'])) {
                $model->hostAccountIds = [];
                $n1 = 0;
                foreach ($map['HostAccountIds'] as $item1) {
                    $model->hostAccountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
