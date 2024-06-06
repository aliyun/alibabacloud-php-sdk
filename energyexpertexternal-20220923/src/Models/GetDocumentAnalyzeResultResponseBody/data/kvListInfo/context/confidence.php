<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo\context;

use AlibabaCloud\Tea\Model;

class confidence extends Model
{
    /**
     * @example 0.9994202852249146
     *
     * @var float
     */
    public $keyConfidence;

    /**
     * @example 0.9794202852249146
     *
     * @var float
     */
    public $valueConfidence;
    protected $_name = [
        'keyConfidence'   => 'keyConfidence',
        'valueConfidence' => 'valueConfidence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyConfidence) {
            $res['keyConfidence'] = $this->keyConfidence;
        }
        if (null !== $this->valueConfidence) {
            $res['valueConfidence'] = $this->valueConfidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return confidence
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keyConfidence'])) {
            $model->keyConfidence = $map['keyConfidence'];
        }
        if (isset($map['valueConfidence'])) {
            $model->valueConfidence = $map['valueConfidence'];
        }

        return $model;
    }
}
