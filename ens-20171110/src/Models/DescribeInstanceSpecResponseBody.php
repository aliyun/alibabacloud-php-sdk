<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody\instanceSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example 20015
     *
     * @var int
     */
    public $dataDiskMaxSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $dataDiskMinSize;

    /**
     * @var instanceSpecs
     */
    public $instanceSpecs;

    /**
     * @example 1ECC937A-AE0E-4626-BE51-DED1D6D1C888
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 80
     *
     * @var int
     */
    public $systemDiskMaxSize;
    protected $_name = [
        'bandwidthLimit'    => 'BandwidthLimit',
        'code'              => 'Code',
        'dataDiskMaxSize'   => 'DataDiskMaxSize',
        'dataDiskMinSize'   => 'DataDiskMinSize',
        'instanceSpecs'     => 'InstanceSpecs',
        'requestId'         => 'RequestId',
        'systemDiskMaxSize' => 'SystemDiskMaxSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dataDiskMaxSize) {
            $res['DataDiskMaxSize'] = $this->dataDiskMaxSize;
        }
        if (null !== $this->dataDiskMinSize) {
            $res['DataDiskMinSize'] = $this->dataDiskMinSize;
        }
        if (null !== $this->instanceSpecs) {
            $res['InstanceSpecs'] = null !== $this->instanceSpecs ? $this->instanceSpecs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemDiskMaxSize) {
            $res['SystemDiskMaxSize'] = $this->systemDiskMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DataDiskMaxSize'])) {
            $model->dataDiskMaxSize = $map['DataDiskMaxSize'];
        }
        if (isset($map['DataDiskMinSize'])) {
            $model->dataDiskMinSize = $map['DataDiskMinSize'];
        }
        if (isset($map['InstanceSpecs'])) {
            $model->instanceSpecs = instanceSpecs::fromMap($map['InstanceSpecs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemDiskMaxSize'])) {
            $model->systemDiskMaxSize = $map['SystemDiskMaxSize'];
        }

        return $model;
    }
}
