<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckShrinkRequest\blockInfos\hitInfos;

class blockInfos extends Model
{
    /**
     * @var hitInfos[]
     */
    public $hitInfos;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'hitInfos' => 'HitInfos',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->hitInfos)) {
            Model::validateArray($this->hitInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitInfos) {
            if (\is_array($this->hitInfos)) {
                $res['HitInfos'] = [];
                $n1 = 0;
                foreach ($this->hitInfos as $item1) {
                    $res['HitInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['HitInfos'])) {
            if (!empty($map['HitInfos'])) {
                $model->hitInfos = [];
                $n1 = 0;
                foreach ($map['HitInfos'] as $item1) {
                    $model->hitInfos[$n1] = hitInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
