<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules;
use AlibabaCloud\Tea\Model;

class DsgDesensPlanAddOrUpdateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var desensRules[]
     */
    public $desensRules;
    protected $_name = [
        'desensRules' => 'DesensRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desensRules) {
            $res['DesensRules'] = [];
            if (null !== $this->desensRules && \is_array($this->desensRules)) {
                $n = 0;
                foreach ($this->desensRules as $item) {
                    $res['DesensRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgDesensPlanAddOrUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensRules'])) {
            if (!empty($map['DesensRules'])) {
                $model->desensRules = [];
                $n                  = 0;
                foreach ($map['DesensRules'] as $item) {
                    $model->desensRules[$n++] = null !== $item ? desensRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
