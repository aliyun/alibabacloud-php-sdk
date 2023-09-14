<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsResponseBody\AScriptIds;
use AlibabaCloud\Tea\Model;

class CreateAScriptsResponseBody extends Model
{
    /**
     * @description The AScript rule IDs.
     *
     * @var AScriptIds[]
     */
    public $AScriptIds;

    /**
     * @description The asynchronous task ID.
     *
     * @example 5c607642-535e-4e06-9d77-df53049b****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example BF0FE763-9603-558F-A55B-0F4B9A3E3C02
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AScriptIds' => 'AScriptIds',
        'jobId'      => 'JobId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            $res['AScriptIds'] = [];
            if (null !== $this->AScriptIds && \is_array($this->AScriptIds)) {
                $n = 0;
                foreach ($this->AScriptIds as $item) {
                    $res['AScriptIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAScriptsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = [];
                $n                 = 0;
                foreach ($map['AScriptIds'] as $item) {
                    $model->AScriptIds[$n++] = null !== $item ? AScriptIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
