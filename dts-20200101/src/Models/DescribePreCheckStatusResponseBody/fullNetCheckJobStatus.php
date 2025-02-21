<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus\jobProgress;

class fullNetCheckJobStatus extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $destRegion;
    /**
     * @var string
     */
    public $destRegionCidr;
    /**
     * @var string
     */
    public $destinationEndpointType;
    /**
     * @var int
     */
    public $errorItem;
    /**
     * @var string
     */
    public $hostRegion;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var jobProgress[]
     */
    public $jobProgress;
    /**
     * @var string
     */
    public $sourceEndpointType;
    /**
     * @var string
     */
    public $srcRegion;
    /**
     * @var string
     */
    public $srcRegionCidr;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'                    => 'Code',
        'destRegion'              => 'DestRegion',
        'destRegionCidr'          => 'DestRegionCidr',
        'destinationEndpointType' => 'DestinationEndpointType',
        'errorItem'               => 'ErrorItem',
        'hostRegion'              => 'HostRegion',
        'jobId'                   => 'JobId',
        'jobName'                 => 'JobName',
        'jobProgress'             => 'JobProgress',
        'sourceEndpointType'      => 'SourceEndpointType',
        'srcRegion'               => 'SrcRegion',
        'srcRegionCidr'           => 'SrcRegionCidr',
        'state'                   => 'State',
        'total'                   => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->jobProgress)) {
            Model::validateArray($this->jobProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destRegionCidr) {
            $res['DestRegionCidr'] = $this->destRegionCidr;
        }

        if (null !== $this->destinationEndpointType) {
            $res['DestinationEndpointType'] = $this->destinationEndpointType;
        }

        if (null !== $this->errorItem) {
            $res['ErrorItem'] = $this->errorItem;
        }

        if (null !== $this->hostRegion) {
            $res['HostRegion'] = $this->hostRegion;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobProgress) {
            if (\is_array($this->jobProgress)) {
                $res['JobProgress'] = [];
                $n1                 = 0;
                foreach ($this->jobProgress as $item1) {
                    $res['JobProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sourceEndpointType) {
            $res['SourceEndpointType'] = $this->sourceEndpointType;
        }

        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        if (null !== $this->srcRegionCidr) {
            $res['SrcRegionCidr'] = $this->srcRegionCidr;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestRegionCidr'])) {
            $model->destRegionCidr = $map['DestRegionCidr'];
        }

        if (isset($map['DestinationEndpointType'])) {
            $model->destinationEndpointType = $map['DestinationEndpointType'];
        }

        if (isset($map['ErrorItem'])) {
            $model->errorItem = $map['ErrorItem'];
        }

        if (isset($map['HostRegion'])) {
            $model->hostRegion = $map['HostRegion'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobProgress'])) {
            if (!empty($map['JobProgress'])) {
                $model->jobProgress = [];
                $n1                 = 0;
                foreach ($map['JobProgress'] as $item1) {
                    $model->jobProgress[$n1++] = jobProgress::fromMap($item1);
                }
            }
        }

        if (isset($map['SourceEndpointType'])) {
            $model->sourceEndpointType = $map['SourceEndpointType'];
        }

        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        if (isset($map['SrcRegionCidr'])) {
            $model->srcRegionCidr = $map['SrcRegionCidr'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
