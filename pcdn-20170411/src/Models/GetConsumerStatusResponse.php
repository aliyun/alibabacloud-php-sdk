<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $integreatedMode;

    /**
     * @var bool
     */
    public $inservice;

    /**
     * @var bool
     */
    public $realtimeMonitor;

    /**
     * @var bool
     */
    public $liveMonitor;

    /**
     * @var bool
     */
    public $cdnUrlRedirectFlag;

    /**
     * @var bool
     */
    public $businessType;

    /**
     * @var int
     */
    public $audit;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'integreatedMode'    => 'IntegreatedMode',
        'inservice'          => 'Inservice',
        'realtimeMonitor'    => 'RealtimeMonitor',
        'liveMonitor'        => 'LiveMonitor',
        'cdnUrlRedirectFlag' => 'CdnUrlRedirectFlag',
        'businessType'       => 'BusinessType',
        'audit'              => 'Audit',
        'comment'            => 'Comment',
        'createdAt'          => 'CreatedAt',
        'updatedAt'          => 'UpdatedAt',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('integreatedMode', $this->integreatedMode, true);
        Model::validateRequired('inservice', $this->inservice, true);
        Model::validateRequired('realtimeMonitor', $this->realtimeMonitor, true);
        Model::validateRequired('liveMonitor', $this->liveMonitor, true);
        Model::validateRequired('cdnUrlRedirectFlag', $this->cdnUrlRedirectFlag, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('audit', $this->audit, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->integreatedMode) {
            $res['IntegreatedMode'] = $this->integreatedMode;
        }
        if (null !== $this->inservice) {
            $res['Inservice'] = $this->inservice;
        }
        if (null !== $this->realtimeMonitor) {
            $res['RealtimeMonitor'] = $this->realtimeMonitor;
        }
        if (null !== $this->liveMonitor) {
            $res['LiveMonitor'] = $this->liveMonitor;
        }
        if (null !== $this->cdnUrlRedirectFlag) {
            $res['CdnUrlRedirectFlag'] = $this->cdnUrlRedirectFlag;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IntegreatedMode'])) {
            $model->integreatedMode = $map['IntegreatedMode'];
        }
        if (isset($map['Inservice'])) {
            $model->inservice = $map['Inservice'];
        }
        if (isset($map['RealtimeMonitor'])) {
            $model->realtimeMonitor = $map['RealtimeMonitor'];
        }
        if (isset($map['LiveMonitor'])) {
            $model->liveMonitor = $map['LiveMonitor'];
        }
        if (isset($map['CdnUrlRedirectFlag'])) {
            $model->cdnUrlRedirectFlag = $map['CdnUrlRedirectFlag'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
