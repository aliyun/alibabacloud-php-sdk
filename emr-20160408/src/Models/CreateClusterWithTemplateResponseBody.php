<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterWithTemplateResponseBody extends Model
{
    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $coreOrderId;

    /**
     * @var string
     */
    public $emrOrderId;

    /**
     * @var string
     */
    public $masterOrderId;

    /**
     * @example BF4FBAC6-B03E-4BFB-B6DB-EB53C34F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'coreOrderId'   => 'CoreOrderId',
        'emrOrderId'    => 'EmrOrderId',
        'masterOrderId' => 'MasterOrderId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->coreOrderId) {
            $res['CoreOrderId'] = $this->coreOrderId;
        }
        if (null !== $this->emrOrderId) {
            $res['EmrOrderId'] = $this->emrOrderId;
        }
        if (null !== $this->masterOrderId) {
            $res['MasterOrderId'] = $this->masterOrderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CoreOrderId'])) {
            $model->coreOrderId = $map['CoreOrderId'];
        }
        if (isset($map['EmrOrderId'])) {
            $model->emrOrderId = $map['EmrOrderId'];
        }
        if (isset($map['MasterOrderId'])) {
            $model->masterOrderId = $map['MasterOrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
