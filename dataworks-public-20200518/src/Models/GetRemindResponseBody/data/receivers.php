<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Dara\Model;

class receivers extends Model
{
    /**
     * @var string[]
     */
    public $alertTargets;

    /**
     * @var string
     */
    public $alertUnit;
    protected $_name = [
        'alertTargets' => 'AlertTargets',
        'alertUnit' => 'AlertUnit',
    ];

    public function validate()
    {
        if (\is_array($this->alertTargets)) {
            Model::validateArray($this->alertTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTargets) {
            if (\is_array($this->alertTargets)) {
                $res['AlertTargets'] = [];
                $n1 = 0;
                foreach ($this->alertTargets as $item1) {
                    $res['AlertTargets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
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
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = [];
                $n1 = 0;
                foreach ($map['AlertTargets'] as $item1) {
                    $model->alertTargets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }

        return $model;
    }
}
