<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteGlobalQuestionRequest extends Model
{
    /**
     * @example 35f1361e-4377-494c-9f10-4274bda0317f
     *
     * @var string
     */
    public $globalQuestionId;

    /**
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example aa279896-64a6-4182-864c-4f2b04ec8d17
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'globalQuestionId' => 'GlobalQuestionId',
        'instanceId'       => 'InstanceId',
        'scriptId'         => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalQuestionId) {
            $res['GlobalQuestionId'] = $this->globalQuestionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGlobalQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalQuestionId'])) {
            $model->globalQuestionId = $map['GlobalQuestionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
