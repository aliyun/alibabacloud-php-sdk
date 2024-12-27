<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SmartClusterRule extends Model
{
    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $sensitivity;
    protected $_name = [
        'keywords'    => 'Keywords',
        'sensitivity' => 'Sensitivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->sensitivity) {
            $res['Sensitivity'] = $this->sensitivity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartClusterRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['Sensitivity'])) {
            $model->sensitivity = $map['Sensitivity'];
        }

        return $model;
    }
}
