<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponseBody\serviceConnections;
use AlibabaCloud\Tea\Model;

class ListServiceConnectionsResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ""
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
     * @var serviceConnections[]
     */
    public $serviceConnections;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'          => 'errorCode',
        'errorMessage'       => 'errorMessage',
        'requestId'          => 'requestId',
        'serviceConnections' => 'serviceConnections',
        'success'            => 'success',
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
        if (null !== $this->serviceConnections) {
            $res['serviceConnections'] = [];
            if (null !== $this->serviceConnections && \is_array($this->serviceConnections)) {
                $n = 0;
                foreach ($this->serviceConnections as $item) {
                    $res['serviceConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceConnectionsResponseBody
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
        if (isset($map['serviceConnections'])) {
            if (!empty($map['serviceConnections'])) {
                $model->serviceConnections = [];
                $n                         = 0;
                foreach ($map['serviceConnections'] as $item) {
                    $model->serviceConnections[$n++] = null !== $item ? serviceConnections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
