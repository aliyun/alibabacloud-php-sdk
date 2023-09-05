<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskReplicaPairRequest extends Model
{
    /**
     * @example 10240
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the request.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The recovery point objective (RPO) of the replication pair. Unit: seconds. Set the value to 900.
     *
     * @example TestReplicaPair
     *
     * @var string
     */
    public $pairName;

    /**
     * @example 900
     *
     * @var int
     */
    public $RPO;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The ClientToken value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure idempotence ](~~25693~~).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The bandwidth used to asynchronously replicate data between the primary and secondary disks. Unit: Kbit/s. Valid values:
     *
     *   10240: equal to 10 Mbit/s
     *   20480: equal to 20 Mbit/s
     *   51200: equal to 50 Mbit/s
     *   102400: equal to 100 Mbit/s
     *
     * Default value: 10240.
     * @example pair-cn-dsa****
     *
     * @var string
     */
    public $replicaPairId;
    protected $_name = [
        'bandwidth'     => 'Bandwidth',
        'clientToken'   => 'ClientToken',
        'description'   => 'Description',
        'pairName'      => 'PairName',
        'RPO'           => 'RPO',
        'regionId'      => 'RegionId',
        'replicaPairId' => 'ReplicaPairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
        }
        if (null !== $this->RPO) {
            $res['RPO'] = $this->RPO;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskReplicaPairRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
        }
        if (isset($map['RPO'])) {
            $model->RPO = $map['RPO'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }

        return $model;
    }
}
