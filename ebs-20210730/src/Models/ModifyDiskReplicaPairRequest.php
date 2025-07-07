<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class ModifyDiskReplicaPairRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableRtc;

    /**
     * @var string
     */
    public $pairName;

    /**
     * @var int
     */
    public $RPO;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaPairId;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'enableRtc' => 'EnableRtc',
        'pairName' => 'PairName',
        'RPO' => 'RPO',
        'regionId' => 'RegionId',
        'replicaPairId' => 'ReplicaPairId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->enableRtc) {
            $res['EnableRtc'] = $this->enableRtc;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['EnableRtc'])) {
            $model->enableRtc = $map['EnableRtc'];
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
