<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCorpNumbersResponseBody\data;

use AlibabaCloud\Dara\Model;

class corpNumbers extends Model
{
    /**
     * @var string[]
     */
    public $instanceNames;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $sipTrunkId;

    /**
     * @var string
     */
    public $sipTrunkName;
    protected $_name = [
        'instanceNames' => 'InstanceNames',
        'number' => 'Number',
        'sipTrunkId' => 'SipTrunkId',
        'sipTrunkName' => 'SipTrunkName',
    ];

    public function validate()
    {
        if (\is_array($this->instanceNames)) {
            Model::validateArray($this->instanceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceNames) {
            if (\is_array($this->instanceNames)) {
                $res['InstanceNames'] = [];
                $n1 = 0;
                foreach ($this->instanceNames as $item1) {
                    $res['InstanceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->sipTrunkId) {
            $res['SipTrunkId'] = $this->sipTrunkId;
        }

        if (null !== $this->sipTrunkName) {
            $res['SipTrunkName'] = $this->sipTrunkName;
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
        if (isset($map['InstanceNames'])) {
            if (!empty($map['InstanceNames'])) {
                $model->instanceNames = [];
                $n1 = 0;
                foreach ($map['InstanceNames'] as $item1) {
                    $model->instanceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['SipTrunkId'])) {
            $model->sipTrunkId = $map['SipTrunkId'];
        }

        if (isset($map['SipTrunkName'])) {
            $model->sipTrunkName = $map['SipTrunkName'];
        }

        return $model;
    }
}
