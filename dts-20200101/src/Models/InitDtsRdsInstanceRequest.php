<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class InitDtsRdsInstanceRequest extends Model
{
    /**
     * @description The ID of the data synchronization task.
     *
     * @example dtszvxa4qmot6p****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description If the node is a self-managed MySQL database that is connected over CEN, you must specify the ID of the CEN instance.
     *
     * > You must specify the **EndpointRegion** and **EndpointInstanceId** parameters or the EndpointCenId parameter based on the type of the node.
     * @example cen-9kqshqum*******
     *
     * @var string
     */
    public $endpointCenId;

    /**
     * @description If the node is an ApsaraDB RDS for MySQL instance, you must specify the ID of the ApsaraDB RDS for MySQL instance.
     *
     * > *   You must also specify the **EndpointRegion** parameter.
     * >*   You must specify the EndpointInstanceId parameter or the **EndpointCenId** parameter based on the type of the node.
     * @example rm-bp1162kryivb8****
     *
     * @var string
     */
    public $endpointInstanceId;

    /**
     * @description The type of the node. Valid values:
     *
     *   **RDS**: an ApsaraDB RDS for MySQL instance
     *   **CEN**: a self-managed MySQL database that is connected over CEN
     *
     * @example RDS
     *
     * @var string
     */
    public $endpointInstanceType;

    /**
     * @description If the node is an ApsaraDB RDS for MySQL instance, you must specify the region in which the ApsaraDB RDS for MySQL instance resides.
     *
     * > *   You must also specify the **EndpointInstanceId** parameter.
     * >*   You must specify the EndpointRegion parameter or the **EndpointCenId** parameter based on the type of the node.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointRegion;

    /**
     * @description The ID of the region in which the active geo-redundancy database cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dtsInstanceId'        => 'DtsInstanceId',
        'endpointCenId'        => 'EndpointCenId',
        'endpointInstanceId'   => 'EndpointInstanceId',
        'endpointInstanceType' => 'EndpointInstanceType',
        'endpointRegion'       => 'EndpointRegion',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->endpointCenId) {
            $res['EndpointCenId'] = $this->endpointCenId;
        }
        if (null !== $this->endpointInstanceId) {
            $res['EndpointInstanceId'] = $this->endpointInstanceId;
        }
        if (null !== $this->endpointInstanceType) {
            $res['EndpointInstanceType'] = $this->endpointInstanceType;
        }
        if (null !== $this->endpointRegion) {
            $res['EndpointRegion'] = $this->endpointRegion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitDtsRdsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['EndpointCenId'])) {
            $model->endpointCenId = $map['EndpointCenId'];
        }
        if (isset($map['EndpointInstanceId'])) {
            $model->endpointInstanceId = $map['EndpointInstanceId'];
        }
        if (isset($map['EndpointInstanceType'])) {
            $model->endpointInstanceType = $map['EndpointInstanceType'];
        }
        if (isset($map['EndpointRegion'])) {
            $model->endpointRegion = $map['EndpointRegion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
