<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo\context;

use AlibabaCloud\Dara\Model;

class confidence extends Model
{
    /**
     * @var float
     */
    public $keyConfidence;
    /**
     * @var float
     */
    public $valueConfidence;
    protected $_name = [
        'keyConfidence'   => 'keyConfidence',
        'valueConfidence' => 'valueConfidence',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
