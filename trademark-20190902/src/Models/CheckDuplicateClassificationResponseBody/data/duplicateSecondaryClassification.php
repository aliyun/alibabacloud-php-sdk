<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateClassificationResponseBody\data;

use AlibabaCloud\Tea\Model;

class duplicateSecondaryClassification extends Model
{
    /**
     * @var string[]
     */
    public $secondaryClassification;
    protected $_name = [
        'secondaryClassification' => 'SecondaryClassification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secondaryClassification) {
            $res['SecondaryClassification'] = $this->secondaryClassification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return duplicateSecondaryClassification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecondaryClassification'])) {
            if (!empty($map['SecondaryClassification'])) {
                $model->secondaryClassification = $map['SecondaryClassification'];
            }
        }

        return $model;
    }
}
