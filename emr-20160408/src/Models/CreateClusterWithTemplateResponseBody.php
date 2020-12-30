<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterWithTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $masterOrderId;

    /**
     * @var string
     */
    public $coreOrderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $emrOrderId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'masterOrderId' => 'MasterOrderId',
        'coreOrderId'   => 'CoreOrderId',
        'requestId'     => 'RequestId',
        'emrOrderId'    => 'EmrOrderId',
        'clusterId'     => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterOrderId) {
            $res['MasterOrderId'] = $this->masterOrderId;
        }
        if (null !== $this->coreOrderId) {
            $res['CoreOrderId'] = $this->coreOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->emrOrderId) {
            $res['EmrOrderId'] = $this->emrOrderId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterWithTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterOrderId'])) {
            $model->masterOrderId = $map['MasterOrderId'];
        }
        if (isset($map['CoreOrderId'])) {
            $model->coreOrderId = $map['CoreOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EmrOrderId'])) {
            $model->emrOrderId = $map['EmrOrderId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
