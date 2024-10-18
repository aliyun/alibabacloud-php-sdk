<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody\logDetail;
use AlibabaCloud\Tea\Model;

class GetCommonLogDetailResponseBody extends Model
{
    /**
     * @description The action name.
     *
     * @example CreateCluster
     *
     * @var string
     */
    public $action;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-abc***
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about the logs.
     *
     * @var logDetail[]
     */
    public $logDetail;

    /**
     * @description The log type.
     *
     * @example operation
     *
     * @var string
     */
    public $logType;

    /**
     * @description The ID of the user who performed the action.
     *
     * @example 239***
     *
     * @var string
     */
    public $operatorUid;

    /**
     * @description The request ID.
     *
     * @example 464E9919-D04F-4D1D-B375-15989492****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 137***
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'action'      => 'Action',
        'clusterId'   => 'ClusterId',
        'logDetail'   => 'LogDetail',
        'logType'     => 'LogType',
        'operatorUid' => 'OperatorUid',
        'requestId'   => 'RequestId',
        'uid'         => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->logDetail) {
            $res['LogDetail'] = [];
            if (null !== $this->logDetail && \is_array($this->logDetail)) {
                $n = 0;
                foreach ($this->logDetail as $item) {
                    $res['LogDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommonLogDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LogDetail'])) {
            if (!empty($map['LogDetail'])) {
                $model->logDetail = [];
                $n                = 0;
                foreach ($map['LogDetail'] as $item) {
                    $model->logDetail[$n++] = null !== $item ? logDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
