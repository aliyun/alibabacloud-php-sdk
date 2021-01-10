<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

class keywords extends Model
{
    /**
     * @var string[]
     */
    public $keywords;
    protected $_name = [
        'keywords' => 'Keywords',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }

        return $model;
    }
}
