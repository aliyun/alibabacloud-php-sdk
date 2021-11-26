<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

class antModelInfo extends Model
{
    /**
     * @var string[]
     */
    public $antModelInfo;
    protected $_name = [
        'antModelInfo' => 'AntModelInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antModelInfo) {
            $res['AntModelInfo'] = $this->antModelInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return antModelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntModelInfo'])) {
            if (!empty($map['AntModelInfo'])) {
                $model->antModelInfo = $map['AntModelInfo'];
            }
        }

        return $model;
    }
}
