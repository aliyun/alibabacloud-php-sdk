<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

class references extends Model
{
    /**
     * @var string[]
     */
    public $reference;
    protected $_name = [
        'reference' => 'Reference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return references
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reference'])) {
            if (!empty($map['Reference'])) {
                $model->reference = $map['Reference'];
            }
        }

        return $model;
    }
}
