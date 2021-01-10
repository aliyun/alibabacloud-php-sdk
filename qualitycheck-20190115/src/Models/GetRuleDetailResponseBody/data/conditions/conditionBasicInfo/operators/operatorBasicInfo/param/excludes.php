<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

class excludes extends Model
{
    /**
     * @var string[]
     */
    public $excludes;
    protected $_name = [
        'excludes' => 'Excludes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludes) {
            $res['Excludes'] = $this->excludes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excludes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Excludes'])) {
            if (!empty($map['Excludes'])) {
                $model->excludes = $map['Excludes'];
            }
        }

        return $model;
    }
}
