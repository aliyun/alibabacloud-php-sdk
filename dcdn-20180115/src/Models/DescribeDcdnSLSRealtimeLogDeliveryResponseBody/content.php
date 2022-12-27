<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example cdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @example field1,field2
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example example
     *
     * @var string
     */
    public $projectName;

    /**
     * @example example-cn
     *
     * @var string
     */
    public $SLSLogStore;

    /**
     * @example example-cn
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $SLSRegion;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $samplingRate;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
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
