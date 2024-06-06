<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo\context;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->keyName) {
            $res['keyName'] = $this->keyName;
        }
        if (null !== $this->keyValue) {
            $res['keyValue'] = $this->keyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kvListInfo
     */
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
