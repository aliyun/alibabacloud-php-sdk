<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponse\instanceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecResponse extends Model
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
    public $dataDiskMinSize;

    /**
     * @var int
     */
    public $dataDiskMaxSize;

    /**
     * @var int
     */
    public $systemDiskMaxSize;

    /**
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @var instanceSpecs
     */
    public $instanceSpecs;
    protected $_name = [
        'requestId'         => 'RequestId',
        'code'              => 'Code',
        'dataDiskMinSize'   => 'DataDiskMinSize',
        'dataDiskMaxSize'   => 'DataDiskMaxSize',
        'systemDiskMaxSize' => 'SystemDiskMaxSize',
        'bandwidthLimit'    => 'BandwidthLimit',
        'instanceSpecs'     => 'InstanceSpecs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('dataDiskMinSize', $this->dataDiskMinSize, true);
        Model::validateRequired('dataDiskMaxSize', $this->dataDiskMaxSize, true);
        Model::validateRequired('systemDiskMaxSize', $this->systemDiskMaxSize, true);
        Model::validateRequired('bandwidthLimit', $this->bandwidthLimit, true);
        Model::validateRequired('instanceSpecs', $this->instanceSpecs, true);
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
        if (null !== $this->dataDiskMinSize) {
            $res['DataDiskMinSize'] = $this->dataDiskMinSize;
        }
        if (null !== $this->dataDiskMaxSize) {
            $res['DataDiskMaxSize'] = $this->dataDiskMaxSize;
        }
        if (null !== $this->systemDiskMaxSize) {
            $res['SystemDiskMaxSize'] = $this->systemDiskMaxSize;
        }
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }
        if (null !== $this->instanceSpecs) {
            $res['InstanceSpecs'] = null !== $this->instanceSpecs ? $this->instanceSpecs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSpecResponse
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
        if (isset($map['DataDiskMinSize'])) {
            $model->dataDiskMinSize = $map['DataDiskMinSize'];
        }
        if (isset($map['DataDiskMaxSize'])) {
            $model->dataDiskMaxSize = $map['DataDiskMaxSize'];
        }
        if (isset($map['SystemDiskMaxSize'])) {
            $model->systemDiskMaxSize = $map['SystemDiskMaxSize'];
        }
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['InstanceSpecs'])) {
            $model->instanceSpecs = instanceSpecs::fromMap($map['InstanceSpecs']);
        }

        return $model;
    }
}
