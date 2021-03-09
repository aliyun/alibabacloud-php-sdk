<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductDistributeJobRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetUid;

    /**
     * @var string
     */
    public $captcha;

    /**
     * @var string
     */
    public $targetAliyunId;
    protected $_name = [
        'apiProduct'       => 'ApiProduct',
        'apiRevision'      => 'ApiRevision',
        'sourceInstanceId' => 'SourceInstanceId',
        'productKey'       => 'ProductKey',
        'targetInstanceId' => 'TargetInstanceId',
        'targetUid'        => 'TargetUid',
        'captcha'          => 'Captcha',
        'targetAliyunId'   => 'TargetAliyunId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->captcha) {
            $res['Captcha'] = $this->captcha;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['Captcha'])) {
            $model->captcha = $map['Captcha'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }

        return $model;
    }
}
