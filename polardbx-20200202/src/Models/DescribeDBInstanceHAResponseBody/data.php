<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceHAResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $primaryAzoneId;

    /**
     * @var string
     */
    public $primaryRegionId;

    /**
     * @var string
     */
    public $secondaryAzoneId;

    /**
     * @var string
     */
    public $secondaryRegionId;

    /**
     * @var string
     */
    public $topologyType;
    protected $_name = [
        'primaryAzoneId'    => 'PrimaryAzoneId',
        'primaryRegionId'   => 'PrimaryRegionId',
        'secondaryAzoneId'  => 'SecondaryAzoneId',
        'secondaryRegionId' => 'SecondaryRegionId',
        'topologyType'      => 'TopologyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryAzoneId) {
            $res['PrimaryAzoneId'] = $this->primaryAzoneId;
        }
        if (null !== $this->primaryRegionId) {
            $res['PrimaryRegionId'] = $this->primaryRegionId;
        }
        if (null !== $this->secondaryAzoneId) {
            $res['SecondaryAzoneId'] = $this->secondaryAzoneId;
        }
        if (null !== $this->secondaryRegionId) {
            $res['SecondaryRegionId'] = $this->secondaryRegionId;
        }
        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryAzoneId'])) {
            $model->primaryAzoneId = $map['PrimaryAzoneId'];
        }
        if (isset($map['PrimaryRegionId'])) {
            $model->primaryRegionId = $map['PrimaryRegionId'];
        }
        if (isset($map['SecondaryAzoneId'])) {
            $model->secondaryAzoneId = $map['SecondaryAzoneId'];
        }
        if (isset($map['SecondaryRegionId'])) {
            $model->secondaryRegionId = $map['SecondaryRegionId'];
        }
        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        return $model;
    }
}
