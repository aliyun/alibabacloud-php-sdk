<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UpdateDcdnSLSRealtimeLogDeliveryRequest extends Model
{
    /**
     * @description The region from which logs are collected.
     *
     *   **cn**: Chinese mainland
     *   **sg**: Singapore
     *   **in**: India
     *   **eu**: Europe
     *   **us**: United States
     *
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The domain names from which logs were collected. You can specify one or more domain names. Separate multiple domain names with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

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
    protected $_name = [
        'dataCenter'   => 'DataCenter',
        'domainName'   => 'DomainName',
        'projectName'  => 'ProjectName',
        'SLSLogStore'  => 'SLSLogStore',
        'SLSProject'   => 'SLSProject',
        'SLSRegion'    => 'SLSRegion',
        'samplingRate' => 'SamplingRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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

        return $model;
    }
}
