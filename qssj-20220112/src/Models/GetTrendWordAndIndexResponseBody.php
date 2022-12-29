<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendWordAndIndexResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTrendWordAndIndexResponseBody extends Model
{
    /**
     * @example "OK"
     *
     * @var string
     */
    public $code;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @example “success”
     *
     * @var string
     */
    public $massage;

    /**
     * @example 33d70ec3-6bbe-47b7-9c23-cd31075ddc1f
     *
     * @var string
     */
    public $requestId;

    /**
     * @example “true”
     *
     * @var string
     */
    public $successResponse;
    protected $_name = [
        'code'            => 'Code',
        'data'            => 'Data',
        'massage'         => 'Massage',
        'requestId'       => 'RequestId',
        'successResponse' => 'SuccessResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->massage) {
            $res['Massage'] = $this->massage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successResponse) {
            $res['SuccessResponse'] = $this->successResponse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrendWordAndIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Massage'])) {
            $model->massage = $map['Massage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessResponse'])) {
            $model->successResponse = $map['SuccessResponse'];
        }

        return $model;
    }
}
