<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsResponseBody;

use AlibabaCloud\Tea\Model;

class AScriptIds extends Model
{
    /**
     * @description The AScript rule ID.
     *
     * @example as-xvq5igaa7uv6vr****
     *
     * @var string
     */
    public $AScriptId;
    protected $_name = [
        'AScriptId' => 'AScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptId) {
            $res['AScriptId'] = $this->AScriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AScriptIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScriptId'])) {
            $model->AScriptId = $map['AScriptId'];
        }

        return $model;
    }
}
