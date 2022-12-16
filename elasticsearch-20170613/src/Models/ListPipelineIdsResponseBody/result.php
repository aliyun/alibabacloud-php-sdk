<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineIdsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $available;

    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example testKibanaManagement
     *
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'available'  => 'available',
        'code'       => 'code',
        'message'    => 'message',
        'pipelineId' => 'pipelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }

        return $model;
    }
}
