<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlgoLibsRequest extends Model
{
    /**
     * @var string
     */
    public $algoLibName;

    /**
     * @var string
     */
    public $capabilityName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $algoLibId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'algoLibName'    => 'AlgoLibName',
        'capabilityName' => 'CapabilityName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'instanceId'     => 'InstanceId',
        'algoLibId'      => 'AlgoLibId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoLibName) {
            $res['AlgoLibName'] = $this->algoLibName;
        }
        if (null !== $this->capabilityName) {
            $res['CapabilityName'] = $this->capabilityName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlgoLibsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoLibName'])) {
            $model->algoLibName = $map['AlgoLibName'];
        }
        if (isset($map['CapabilityName'])) {
            $model->capabilityName = $map['CapabilityName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
