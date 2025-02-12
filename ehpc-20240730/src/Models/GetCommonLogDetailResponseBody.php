<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody\logDetail;

class GetCommonLogDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var logDetail[]
     */
    public $logDetail;
    /**
     * @var string
     */
    public $logType;
    /**
     * @var string
     */
    public $operatorUid;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->logDetail)) {
            Model::validateArray($this->logDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->logDetail) {
            if (\is_array($this->logDetail)) {
                $res['LogDetail'] = [];
                $n1               = 0;
                foreach ($this->logDetail as $item1) {
                    $res['LogDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1               = 0;
                foreach ($map['LogDetail'] as $item1) {
                    $model->logDetail[$n1++] = logDetail::fromMap($item1);
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
