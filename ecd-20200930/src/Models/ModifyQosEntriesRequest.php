<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyQosEntriesRequest extends Model
{
    /**
     * @var string[]
     */
    public $authAndroidId;

    /**
     * @var string[]
     */
    public $authDesktopId;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @var string[]
     */
    public $revokeAndroidId;

    /**
     * @var string[]
     */
    public $revokeDesktopId;
    protected $_name = [
        'authAndroidId' => 'AuthAndroidId',
        'authDesktopId' => 'AuthDesktopId',
        'qosRuleId' => 'QosRuleId',
        'revokeAndroidId' => 'RevokeAndroidId',
        'revokeDesktopId' => 'RevokeDesktopId',
    ];

    public function validate()
    {
        if (\is_array($this->authAndroidId)) {
            Model::validateArray($this->authAndroidId);
        }
        if (\is_array($this->authDesktopId)) {
            Model::validateArray($this->authDesktopId);
        }
        if (\is_array($this->revokeAndroidId)) {
            Model::validateArray($this->revokeAndroidId);
        }
        if (\is_array($this->revokeDesktopId)) {
            Model::validateArray($this->revokeDesktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAndroidId) {
            if (\is_array($this->authAndroidId)) {
                $res['AuthAndroidId'] = [];
                $n1 = 0;
                foreach ($this->authAndroidId as $item1) {
                    $res['AuthAndroidId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authDesktopId) {
            if (\is_array($this->authDesktopId)) {
                $res['AuthDesktopId'] = [];
                $n1 = 0;
                foreach ($this->authDesktopId as $item1) {
                    $res['AuthDesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
        }

        if (null !== $this->revokeAndroidId) {
            if (\is_array($this->revokeAndroidId)) {
                $res['RevokeAndroidId'] = [];
                $n1 = 0;
                foreach ($this->revokeAndroidId as $item1) {
                    $res['RevokeAndroidId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->revokeDesktopId) {
            if (\is_array($this->revokeDesktopId)) {
                $res['RevokeDesktopId'] = [];
                $n1 = 0;
                foreach ($this->revokeDesktopId as $item1) {
                    $res['RevokeDesktopId'][$n1] = $item1;
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
        if (isset($map['AuthAndroidId'])) {
            if (!empty($map['AuthAndroidId'])) {
                $model->authAndroidId = [];
                $n1 = 0;
                foreach ($map['AuthAndroidId'] as $item1) {
                    $model->authAndroidId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthDesktopId'])) {
            if (!empty($map['AuthDesktopId'])) {
                $model->authDesktopId = [];
                $n1 = 0;
                foreach ($map['AuthDesktopId'] as $item1) {
                    $model->authDesktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }

        if (isset($map['RevokeAndroidId'])) {
            if (!empty($map['RevokeAndroidId'])) {
                $model->revokeAndroidId = [];
                $n1 = 0;
                foreach ($map['RevokeAndroidId'] as $item1) {
                    $model->revokeAndroidId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RevokeDesktopId'])) {
            if (!empty($map['RevokeDesktopId'])) {
                $model->revokeDesktopId = [];
                $n1 = 0;
                foreach ($map['RevokeDesktopId'] as $item1) {
                    $model->revokeDesktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
