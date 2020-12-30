<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $liveMonitor;

    /**
     * @var int
     */
    public $audit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $integreatedMode;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $cdnUrlRedirectFlag;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var bool
     */
    public $inservice;

    /**
     * @var bool
     */
    public $realtimeMonitor;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'comment'            => 'Comment',
        'liveMonitor'        => 'LiveMonitor',
        'audit'              => 'Audit',
        'requestId'          => 'RequestId',
        'integreatedMode'    => 'IntegreatedMode',
        'createdAt'          => 'CreatedAt',
        'cdnUrlRedirectFlag' => 'CdnUrlRedirectFlag',
        'businessType'       => 'BusinessType',
        'inservice'          => 'Inservice',
        'realtimeMonitor'    => 'RealtimeMonitor',
        'code'               => 'Code',
        'updatedAt'          => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->liveMonitor) {
            $res['LiveMonitor'] = $this->liveMonitor;
        }
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->integreatedMode) {
            $res['IntegreatedMode'] = $this->integreatedMode;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->cdnUrlRedirectFlag) {
            $res['CdnUrlRedirectFlag'] = $this->cdnUrlRedirectFlag;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->inservice) {
            $res['Inservice'] = $this->inservice;
        }
        if (null !== $this->realtimeMonitor) {
            $res['RealtimeMonitor'] = $this->realtimeMonitor;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['LiveMonitor'])) {
            $model->liveMonitor = $map['LiveMonitor'];
        }
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IntegreatedMode'])) {
            $model->integreatedMode = $map['IntegreatedMode'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['CdnUrlRedirectFlag'])) {
            $model->cdnUrlRedirectFlag = $map['CdnUrlRedirectFlag'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Inservice'])) {
            $model->inservice = $map['Inservice'];
        }
        if (isset($map['RealtimeMonitor'])) {
            $model->realtimeMonitor = $map['RealtimeMonitor'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
