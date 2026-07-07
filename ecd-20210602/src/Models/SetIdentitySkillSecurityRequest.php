<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20210602\Models\SetIdentitySkillSecurityRequest\identityIds;

class SetIdentitySkillSecurityRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var identityIds[]
     */
    public $identityIds;

    /**
     * @var string
     */
    public $skillChannel;
    protected $_name = [
        'enabled' => 'Enabled',
        'identityIds' => 'IdentityIds',
        'skillChannel' => 'SkillChannel',
    ];

    public function validate()
    {
        if (\is_array($this->identityIds)) {
            Model::validateArray($this->identityIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->identityIds) {
            if (\is_array($this->identityIds)) {
                $res['IdentityIds'] = [];
                $n1 = 0;
                foreach ($this->identityIds as $item1) {
                    $res['IdentityIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillChannel) {
            $res['SkillChannel'] = $this->skillChannel;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['IdentityIds'])) {
            if (!empty($map['IdentityIds'])) {
                $model->identityIds = [];
                $n1 = 0;
                foreach ($map['IdentityIds'] as $item1) {
                    $model->identityIds[$n1] = identityIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillChannel'])) {
            $model->skillChannel = $map['SkillChannel'];
        }

        return $model;
    }
}
