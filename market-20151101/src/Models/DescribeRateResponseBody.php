<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRateResponseBody extends Model
{
    /**
     * @var string
     */
    public $additionalContent;

    /**
     * @var string
     */
    public $additionalExplaintion;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $explaintion;

    /**
     * @var int
     */
    public $gmtAdditional;

    /**
     * @var int
     */
    public $gmtAdditionalExplaintion;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtExplaintion;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'additionalContent'        => 'AdditionalContent',
        'additionalExplaintion'    => 'AdditionalExplaintion',
        'aliUid'                   => 'AliUid',
        'content'                  => 'Content',
        'explaintion'              => 'Explaintion',
        'gmtAdditional'            => 'GmtAdditional',
        'gmtAdditionalExplaintion' => 'GmtAdditionalExplaintion',
        'gmtCreated'               => 'GmtCreated',
        'gmtExplaintion'           => 'GmtExplaintion',
        'id'                       => 'Id',
        'instanceId'               => 'InstanceId',
        'orderId'                  => 'OrderId',
        'productId'                => 'ProductId',
        'requestId'                => 'RequestId',
        'score'                    => 'Score',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalContent) {
            $res['AdditionalContent'] = $this->additionalContent;
        }
        if (null !== $this->additionalExplaintion) {
            $res['AdditionalExplaintion'] = $this->additionalExplaintion;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->explaintion) {
            $res['Explaintion'] = $this->explaintion;
        }
        if (null !== $this->gmtAdditional) {
            $res['GmtAdditional'] = $this->gmtAdditional;
        }
        if (null !== $this->gmtAdditionalExplaintion) {
            $res['GmtAdditionalExplaintion'] = $this->gmtAdditionalExplaintion;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtExplaintion) {
            $res['GmtExplaintion'] = $this->gmtExplaintion;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalContent'])) {
            $model->additionalContent = $map['AdditionalContent'];
        }
        if (isset($map['AdditionalExplaintion'])) {
            $model->additionalExplaintion = $map['AdditionalExplaintion'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Explaintion'])) {
            $model->explaintion = $map['Explaintion'];
        }
        if (isset($map['GmtAdditional'])) {
            $model->gmtAdditional = $map['GmtAdditional'];
        }
        if (isset($map['GmtAdditionalExplaintion'])) {
            $model->gmtAdditionalExplaintion = $map['GmtAdditionalExplaintion'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtExplaintion'])) {
            $model->gmtExplaintion = $map['GmtExplaintion'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
