<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules;

class DsgDesensPlanAddOrUpdateRequest extends Model
{
    /**
     * @var desensRules[]
     */
    public $desensRules;
    protected $_name = [
        'desensRules' => 'DesensRules',
    ];

    public function validate()
    {
        if (\is_array($this->desensRules)) {
            Model::validateArray($this->desensRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensRules) {
            if (\is_array($this->desensRules)) {
                $res['DesensRules'] = [];
                $n1                 = 0;
                foreach ($this->desensRules as $item1) {
                    $res['DesensRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DesensRules'])) {
            if (!empty($map['DesensRules'])) {
                $model->desensRules = [];
                $n1                 = 0;
                foreach ($map['DesensRules'] as $item1) {
                    $model->desensRules[$n1++] = desensRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
