<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class UpdateDcdnSLSRealtimeLogDeliveryRequest extends Model
{
    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $SLSLogStore;

    /**
     * @var string
     */
    public $SLSProject;

    /**
     * @var string
     */
    public $SLSRegion;

    /**
     * @var string
     */
    public $samplingRate;
    protected $_name = [
        'dataCenter' => 'DataCenter',
        'domainName' => 'DomainName',
        'projectName' => 'ProjectName',
        'SLSLogStore' => 'SLSLogStore',
        'SLSProject' => 'SLSProject',
        'SLSRegion' => 'SLSRegion',
        'samplingRate' => 'SamplingRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
