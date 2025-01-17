<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ListTransitRouterAvailableResourceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $availableZones;
    /**
     * @var string[]
     */
    public $masterZones;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $slaveZones;
    /**
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
        if (\is_array($this->availableZones)) {
            Model::validateArray($this->availableZones);
        }
        if (\is_array($this->masterZones)) {
            Model::validateArray($this->masterZones);
        }
        if (\is_array($this->slaveZones)) {
            Model::validateArray($this->slaveZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            if (\is_array($this->availableZones)) {
                $res['AvailableZones'] = [];
                $n1                    = 0;
                foreach ($this->availableZones as $item1) {
                    $res['AvailableZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->masterZones) {
            if (\is_array($this->masterZones)) {
                $res['MasterZones'] = [];
                $n1                 = 0;
                foreach ($this->masterZones as $item1) {
                    $res['MasterZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slaveZones) {
            if (\is_array($this->slaveZones)) {
                $res['SlaveZones'] = [];
                $n1                = 0;
                foreach ($this->slaveZones as $item1) {
                    $res['SlaveZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportMulticast) {
            $res['SupportMulticast'] = $this->supportMulticast;
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
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = [];
                $n1                    = 0;
                foreach ($map['AvailableZones'] as $item1) {
                    $model->availableZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MasterZones'])) {
            if (!empty($map['MasterZones'])) {
                $model->masterZones = [];
                $n1                 = 0;
                foreach ($map['MasterZones'] as $item1) {
                    $model->masterZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlaveZones'])) {
            if (!empty($map['SlaveZones'])) {
                $model->slaveZones = [];
                $n1                = 0;
                foreach ($map['SlaveZones'] as $item1) {
                    $model->slaveZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupportMulticast'])) {
            $model->supportMulticast = $map['SupportMulticast'];
        }

        return $model;
    }
}
