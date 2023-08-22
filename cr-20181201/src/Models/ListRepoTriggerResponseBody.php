<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoTriggerResponseBody\triggers;
use AlibabaCloud\Tea\Model;

class ListRepoTriggerResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example 2CA76D52-A8F0-4D0B-854E-FBD9F6C99049
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The triggers of the repository.
     *
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'code'      => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'triggers'  => 'Triggers',
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['Triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['Triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
