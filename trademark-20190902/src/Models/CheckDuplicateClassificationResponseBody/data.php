<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateClassificationResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\CheckDuplicateClassificationResponseBody\data\duplicateSecondaryClassification;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var duplicateSecondaryClassification
     */
    public $duplicateSecondaryClassification;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'duplicateSecondaryClassification' => 'DuplicateSecondaryClassification',
        'trademarkName'                    => 'TrademarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duplicateSecondaryClassification) {
            $res['DuplicateSecondaryClassification'] = null !== $this->duplicateSecondaryClassification ? $this->duplicateSecondaryClassification->toMap() : null;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DuplicateSecondaryClassification'])) {
            $model->duplicateSecondaryClassification = duplicateSecondaryClassification::fromMap($map['DuplicateSecondaryClassification']);
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
