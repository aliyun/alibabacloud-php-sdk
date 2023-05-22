<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The type of the collected logs. Default value: cdn_log_access_l1. Valid values:
     *
     *   **cdn_log_access_l1**: access logs of Dynamic Content Delivery Network (DCDN) points of presence (POPs)
     *   **cdn_log_origin**: back-to-origin logs
     *   **cdn_log_er**: EdgeRoutine logs
     *
     * @example cdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The region from which logs were collected.
     *
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The domain names from which logs were collected. You can specify one or more domain names. Separate multiple domain names with commas (,).
     *
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the field. For more information about fields in real-time log entries, see [Fields in a real-time log](~~324199~~).
     *
     * @example field1,field2
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The name of the project.
     *
     * @example example
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the Logstore.
     *
     * @example example-cn
     *
     * @var string
     */
    public $SLSLogStore;

    /**
     * @description The name of the log file.
     *
     * @example example-cn
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @description The region to which logs were delivered.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $SLSRegion;

    /**
     * @description The sampling rate.
     *
     * @example 1.0
     *
     * @var string
     */
    public $samplingRate;

    /**
     * @description The status of real-time logs.
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of log delivery. Only **SLS_POST** is supported.
     *
     * @example SLS_POST
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter'   => 'DataCenter',
        'domainName'   => 'DomainName',
        'fieldName'    => 'FieldName',
        'projectName'  => 'ProjectName',
        'SLSLogStore'  => 'SLSLogStore',
        'SLSProject'   => 'SLSProject',
        'SLSRegion'    => 'SLSRegion',
        'samplingRate' => 'SamplingRate',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->SLSLogStore) {
            $res['SLSLogStore'] = $this->SLSLogStore;
        }
        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }
        if (null !== $this->SLSRegion) {
            $res['SLSRegion'] = $this->SLSRegion;
        }
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SLSLogStore'])) {
            $model->SLSLogStore = $map['SLSLogStore'];
        }
        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }
        if (isset($map['SLSRegion'])) {
            $model->SLSRegion = $map['SLSRegion'];
        }
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
