<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponseBody\data\tmProduces;

use AlibabaCloud\Tea\Model;

class firstClassification extends Model
{
    /**
     * @var string
     */
    public $classificationName;

    /**
     * @var string
     */
    public $classificationCode;
    protected $_name = [
        'classificationName' => 'ClassificationName',
        'classificationCode' => 'ClassificationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationName) {
            $res['ClassificationName'] = $this->classificationName;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firstClassification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassificationName'])) {
            $model->classificationName = $map['ClassificationName'];
        }
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }

        return $model;
    }
}
