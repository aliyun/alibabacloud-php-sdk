<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponseBody\workitemTypes;
use AlibabaCloud\Tea\Model;

class ListProjectWorkitemTypesResponseBody extends Model
{
    /**
     * @example 例：Openapi.RequestError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example errormessage
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true或者false
     *
     * @var bool
     */
    public $success;

    /**
     * @var workitemTypes[]
     */
    public $workitemTypes;
    protected $_name = [
        'errorCode'     => 'errorCode',
        'errorMessage'  => 'errorMessage',
        'requestId'     => 'requestId',
        'success'       => 'success',
        'workitemTypes' => 'workitemTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workitemTypes) {
            $res['workitemTypes'] = [];
            if (null !== $this->workitemTypes && \is_array($this->workitemTypes)) {
                $n = 0;
                foreach ($this->workitemTypes as $item) {
                    $res['workitemTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectWorkitemTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workitemTypes'])) {
            if (!empty($map['workitemTypes'])) {
                $model->workitemTypes = [];
                $n                    = 0;
                foreach ($map['workitemTypes'] as $item) {
                    $model->workitemTypes[$n++] = null !== $item ? workitemTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
