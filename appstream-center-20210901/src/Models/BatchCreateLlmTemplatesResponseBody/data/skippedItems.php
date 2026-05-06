<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesResponseBody\data;

use AlibabaCloud\Dara\Model;

class skippedItems extends Model
{
    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'llmCode' => 'LlmCode',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
