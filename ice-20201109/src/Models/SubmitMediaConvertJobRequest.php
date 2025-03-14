<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaConvertJobRequest extends Model
{
    /**
     * @description The idempotency key that is used to ensure repeated requests have the same effect as a single request.
     *
     * @example 86f8e525-9d73-4dac-88aa-7aa4e950c00a
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configurations of the transcoding task.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the queue.
     *
     * @example e197ecfb103e4849922b054d3032f954
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The user data.
     *
     * @example {"videoId":"abcd"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'config' => 'Config',
        'pipelineId' => 'PipelineId',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaConvertJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
