<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces;

use AlibabaCloud\Tea\Model;

class firstClassification extends Model
{
    /**
     * @var string
     */
    public $classificationCode;

    /**
     * @var string
     */
    public $classificationName;
    protected $_name = [
        'classificationCode' => 'ClassificationCode',
        'classificationName' => 'ClassificationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }
        if (null !== $this->classificationName) {
            $res['ClassificationName'] = $this->classificationName;
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
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }
        if (isset($map['ClassificationName'])) {
            $model->classificationName = $map['ClassificationName'];
        }

        return $model;
    }
}
