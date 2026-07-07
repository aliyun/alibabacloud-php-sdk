<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models;

use AlibabaCloud\Dara\Model;

class DeleteTenantSkillsRequest extends Model
{
    /**
     * @var string
     */
    public $skillChannel;

    /**
     * @var string[]
     */
    public $skillIds;
    protected $_name = [
        'skillChannel' => 'SkillChannel',
        'skillIds' => 'SkillIds',
    ];

    public function validate()
    {
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
