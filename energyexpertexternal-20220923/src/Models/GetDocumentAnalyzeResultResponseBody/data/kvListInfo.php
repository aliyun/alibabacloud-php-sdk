<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo\context;

class kvListInfo extends Model
{
    /**
     * @var context
     */
    public $context;
    /**
     * @var string
     */
    public $keyName;
    /**
     * @var string
     */
    public $keyValue;
    protected $_name = [
        'context'  => 'context',
        'keyName'  => 'keyName',
        'keyValue' => 'keyValue',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->keyName) {
            $res['keyName'] = $this->keyName;
        }

        if (null !== $this->keyValue) {
            $res['keyValue'] = $this->keyValue;
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
        if (isset($map['context'])) {
            $model->context = context::fromMap($map['context']);
        }

        if (isset($map['keyName'])) {
            $model->keyName = $map['keyName'];
        }

        if (isset($map['keyValue'])) {
            $model->keyValue = $map['keyValue'];
        }

        return $model;
    }
}
