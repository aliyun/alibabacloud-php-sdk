<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class UpdateVccRequest extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 20006627643
     *
     * @var string
     */
    public $orderId;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @example vcc-heyuan-backup
     *
     * @var string
     */
    public $vccName;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'orderId'   => 'OrderId',
        'regionId'  => 'RegionId',
        'vccId'     => 'VccId',
        'vccName'   => 'VccName',
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccName) {
            $res['VccName'] = $this->vccName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVccRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccName'])) {
            $model->vccName = $map['VccName'];
        }

        return $model;
    }
}
