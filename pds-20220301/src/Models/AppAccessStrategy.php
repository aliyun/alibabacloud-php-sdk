<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class AppAccessStrategy extends Model
{
    /**
     * @var string
     */
    public $effect;

    /**
     * @var string[]
     */
    public $exceptAppIdList;
    protected $_name = [
        'effect' => 'effect',
        'exceptAppIdList' => 'except_app_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->exceptAppIdList)) {
            Model::validateArray($this->exceptAppIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }

        if (null !== $this->exceptAppIdList) {
            if (\is_array($this->exceptAppIdList)) {
                $res['except_app_id_list'] = [];
                $n1 = 0;
                foreach ($this->exceptAppIdList as $item1) {
                    $res['except_app_id_list'][$n1++] = $item1;
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
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }

        if (isset($map['except_app_id_list'])) {
            if (!empty($map['except_app_id_list'])) {
                $model->exceptAppIdList = [];
                $n1 = 0;
                foreach ($map['except_app_id_list'] as $item1) {
                    $model->exceptAppIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
