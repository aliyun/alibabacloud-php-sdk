<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponseBody\data\propertyResults;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $valueId;

    /**
     * @var float
     */
    public $probability;

    /**
     * @var string
     */
    public $valueName;
    protected $_name = [
        'valueId'     => 'ValueId',
        'probability' => 'Probability',
        'valueName'   => 'ValueName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueId) {
            $res['ValueId'] = $this->valueId;
        }
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }
        if (null !== $this->valueName) {
            $res['ValueName'] = $this->valueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueId'])) {
            $model->valueId = $map['ValueId'];
        }
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }
        if (isset($map['ValueName'])) {
            $model->valueName = $map['ValueName'];
        }

        return $model;
    }
}
