<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody\adpInfo;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $CPULimit;

    /**
     * @var string
     */
    public $CPURequest;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @var string
     */
    public $componentVersion;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var string
     */
    public $orchestrationValue;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageRequest;
    protected $_name = [
        'CPULimit'             => 'CPULimit',
        'CPURequest'           => 'CPURequest',
        'componentName'        => 'componentName',
        'componentReleaseName' => 'componentReleaseName',
        'componentVersion'     => 'componentVersion',
        'memoryLimit'          => 'memoryLimit',
        'memoryRequest'        => 'memoryRequest',
        'orchestrationValue'   => 'orchestrationValue',
        'status'               => 'status',
        'storageRequest'       => 'storageRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPULimit) {
            $res['CPULimit'] = $this->CPULimit;
        }
        if (null !== $this->CPURequest) {
            $res['CPURequest'] = $this->CPURequest;
        }
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->componentReleaseName) {
            $res['componentReleaseName'] = $this->componentReleaseName;
        }
        if (null !== $this->componentVersion) {
            $res['componentVersion'] = $this->componentVersion;
        }
        if (null !== $this->memoryLimit) {
            $res['memoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['memoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->orchestrationValue) {
            $res['orchestrationValue'] = $this->orchestrationValue;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->storageRequest) {
            $res['storageRequest'] = $this->storageRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPULimit'])) {
            $model->CPULimit = $map['CPULimit'];
        }
        if (isset($map['CPURequest'])) {
            $model->CPURequest = $map['CPURequest'];
        }
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['componentReleaseName'])) {
            $model->componentReleaseName = $map['componentReleaseName'];
        }
        if (isset($map['componentVersion'])) {
            $model->componentVersion = $map['componentVersion'];
        }
        if (isset($map['memoryLimit'])) {
            $model->memoryLimit = $map['memoryLimit'];
        }
        if (isset($map['memoryRequest'])) {
            $model->memoryRequest = $map['memoryRequest'];
        }
        if (isset($map['orchestrationValue'])) {
            $model->orchestrationValue = $map['orchestrationValue'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['storageRequest'])) {
            $model->storageRequest = $map['storageRequest'];
        }

        return $model;
    }
}
