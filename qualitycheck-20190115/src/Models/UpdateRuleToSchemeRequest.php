<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleToSchemeRequest extends Model
{
    /**
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'jsonStr' => 'jsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonStr) {
            $res['jsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleToSchemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jsonStr'])) {
            $model->jsonStr = $map['jsonStr'];
        }

        return $model;
    }
}
