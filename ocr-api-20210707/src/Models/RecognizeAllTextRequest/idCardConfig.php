<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Dara\Model;

class idCardConfig extends Model
{
    /**
     * @var bool
     */
    public $llmRec;

    /**
     * @var bool
     */
    public $outputIdCardQuality;
    protected $_name = [
        'llmRec' => 'Llm_rec',
        'outputIdCardQuality' => 'OutputIdCardQuality',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmRec) {
            $res['Llm_rec'] = $this->llmRec;
        }

        if (null !== $this->outputIdCardQuality) {
            $res['OutputIdCardQuality'] = $this->outputIdCardQuality;
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
        if (isset($map['Llm_rec'])) {
            $model->llmRec = $map['Llm_rec'];
        }

        if (isset($map['OutputIdCardQuality'])) {
            $model->outputIdCardQuality = $map['OutputIdCardQuality'];
        }

        return $model;
    }
}
