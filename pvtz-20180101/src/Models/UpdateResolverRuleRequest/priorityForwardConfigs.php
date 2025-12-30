<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleRequest;

use AlibabaCloud\Dara\Model;

class priorityForwardConfigs extends Model
{
    /**
     * @var string[]
     */
    public $alidnsServiceAddresses;

    /**
     * @var string[]
     */
    public $customAddresses;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'alidnsServiceAddresses' => 'AlidnsServiceAddresses',
        'customAddresses' => 'CustomAddresses',
        'enableStatus' => 'EnableStatus',
        'priority' => 'Priority',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->alidnsServiceAddresses)) {
            Model::validateArray($this->alidnsServiceAddresses);
        }
        if (\is_array($this->customAddresses)) {
            Model::validateArray($this->customAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alidnsServiceAddresses) {
            if (\is_array($this->alidnsServiceAddresses)) {
                $res['AlidnsServiceAddresses'] = [];
                $n1 = 0;
                foreach ($this->alidnsServiceAddresses as $item1) {
                    $res['AlidnsServiceAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customAddresses) {
            if (\is_array($this->customAddresses)) {
                $res['CustomAddresses'] = [];
                $n1 = 0;
                foreach ($this->customAddresses as $item1) {
                    $res['CustomAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['AlidnsServiceAddresses'])) {
            if (!empty($map['AlidnsServiceAddresses'])) {
                $model->alidnsServiceAddresses = [];
                $n1 = 0;
                foreach ($map['AlidnsServiceAddresses'] as $item1) {
                    $model->alidnsServiceAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomAddresses'])) {
            if (!empty($map['CustomAddresses'])) {
                $model->customAddresses = [];
                $n1 = 0;
                foreach ($map['CustomAddresses'] as $item1) {
                    $model->customAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
