<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillAuthRequest\identities;

class SetIdentitySkillAuthRequest extends Model
{
    /**
     * @var bool
     */
    public $autoInstall;

    /**
     * @var identities[]
     */
    public $identities;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $skillChannel;

    /**
     * @var string[]
     */
    public $skillIds;
    protected $_name = [
        'autoInstall' => 'AutoInstall',
        'identities' => 'Identities',
        'operationType' => 'OperationType',
        'skillChannel' => 'SkillChannel',
        'skillIds' => 'SkillIds',
    ];

    public function validate()
    {
        if (\is_array($this->identities)) {
            Model::validateArray($this->identities);
        }
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->identities) {
            if (\is_array($this->identities)) {
                $res['Identities'] = [];
                $n1 = 0;
                foreach ($this->identities as $item1) {
                    $res['Identities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->skillChannel) {
            $res['SkillChannel'] = $this->skillChannel;
        }

        if (null !== $this->skillIds) {
            if (\is_array($this->skillIds)) {
                $res['SkillIds'] = [];
                $n1 = 0;
                foreach ($this->skillIds as $item1) {
                    $res['SkillIds'][$n1] = $item1;
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
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['Identities'])) {
            if (!empty($map['Identities'])) {
                $model->identities = [];
                $n1 = 0;
                foreach ($map['Identities'] as $item1) {
                    $model->identities[$n1] = identities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['SkillChannel'])) {
            $model->skillChannel = $map['SkillChannel'];
        }

        if (isset($map['SkillIds'])) {
            if (!empty($map['SkillIds'])) {
                $model->skillIds = [];
                $n1 = 0;
                foreach ($map['SkillIds'] as $item1) {
                    $model->skillIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
