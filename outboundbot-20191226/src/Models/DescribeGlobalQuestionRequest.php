<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeGlobalQuestionRequest extends Model
{
    /**
     * @example e851e242-ad67-4507-96a2-d4114564dcec
     *
     * @var string
     */
    public $globalQuestionId;

    /**
     * @example 7cefbff0-8d50-4d6f-b93c-73cee23c1555
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example b7ee988b-2837-4bc1-9d56-f76e7c831f60
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
     * @return DescribeGlobalQuestionRequest
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
