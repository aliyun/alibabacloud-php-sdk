<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ListTransitRouterAvailableResourceResponseBody extends Model
{
    /**
     * @description A list of zone IDs.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description A list of primary zones.
     *
     * @var string[]
     */
    public $masterZones;

    /**
     * @description The request ID.
     *
     * @example B4F480E0-4E76-5E43-9966-8322C28A158A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of secondary zone IDs.
     *
     * @var string[]
     */
    public $slaveZones;

    /**
     * @description Indicates whether the zone supports the multicast feature.
     *
     * @example false
     *
     * @var bool
     */
    public $supportMulticast;
    protected $_name = [
        'availableZones'   => 'AvailableZones',
        'masterZones'      => 'MasterZones',
        'requestId'        => 'RequestId',
        'slaveZones'       => 'SlaveZones',
        'supportMulticast' => 'SupportMulticast',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
        }
        if (null !== $this->masterZones) {
            $res['MasterZones'] = $this->masterZones;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = $this->slaveZones;
        }
        if (null !== $this->supportMulticast) {
            $res['SupportMulticast'] = $this->supportMulticast;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
            }
        }
        if (isset($map['MasterZones'])) {
            if (!empty($map['MasterZones'])) {
                $model->masterZones = $map['MasterZones'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlaveZones'])) {
            if (!empty($map['SlaveZones'])) {
                $model->slaveZones = $map['SlaveZones'];
            }
        }
        if (isset($map['SupportMulticast'])) {
            $model->supportMulticast = $map['SupportMulticast'];
        }

        return $model;
    }
}
