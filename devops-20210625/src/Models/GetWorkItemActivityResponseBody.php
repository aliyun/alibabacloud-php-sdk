<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities;
use AlibabaCloud\Tea\Model;

class GetWorkItemActivityResponseBody extends Model
{
    /**
     * @var activities[]
     */
    public $activities;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'activities' => 'activities',
        'errorCode'  => 'errorCode',
        'errorMsg'   => 'errorMsg',
        'requestId'  => 'requestId',
        'success'    => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activities) {
            $res['activities'] = [];
            if (null !== $this->activities && \is_array($this->activities)) {
                $n = 0;
                foreach ($this->activities as $item) {
                    $res['activities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkItemActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activities'])) {
            if (!empty($map['activities'])) {
                $model->activities = [];
                $n                 = 0;
                foreach ($map['activities'] as $item) {
                    $model->activities[$n++] = null !== $item ? activities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
