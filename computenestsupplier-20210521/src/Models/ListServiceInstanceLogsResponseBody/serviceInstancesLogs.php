<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceLogsResponseBody;

use AlibabaCloud\Dara\Model;

class serviceInstancesLogs extends Model
{
    /**
     * @var string
     */
    public $compliancePackType;
    /**
     * @var string
     */
    public $complianceRuleName;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $logType;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'compliancePackType' => 'CompliancePackType',
        'complianceRuleName' => 'ComplianceRuleName',
        'content'            => 'Content',
        'logType'            => 'LogType',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
        'source'             => 'Source',
        'status'             => 'Status',
        'timestamp'          => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackType) {
            $res['CompliancePackType'] = $this->compliancePackType;
        }

        if (null !== $this->complianceRuleName) {
            $res['ComplianceRuleName'] = $this->complianceRuleName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['CompliancePackType'])) {
            $model->compliancePackType = $map['CompliancePackType'];
        }

        if (isset($map['ComplianceRuleName'])) {
            $model->complianceRuleName = $map['ComplianceRuleName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
