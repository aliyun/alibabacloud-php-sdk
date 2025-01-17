<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects\dstContainer;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects\srcContainer;

class connects extends Model
{
    /**
     * @var dstContainer
     */
    public $dstContainer;
    /**
     * @var string
     */
    public $dstIp;
    /**
     * @var string
     */
    public $dstPort;
    /**
     * @var int
     */
    public $firstTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $lastTime;
    /**
     * @var srcContainer
     */
    public $srcContainer;
    /**
     * @var string
     */
    public $srcIp;
    /**
     * @var string
     */
    public $srcPort;
    protected $_name = [
        'dstContainer' => 'DstContainer',
        'dstIp'        => 'DstIp',
        'dstPort'      => 'DstPort',
        'firstTime'    => 'FirstTime',
        'id'           => 'Id',
        'lastTime'     => 'LastTime',
        'srcContainer' => 'SrcContainer',
        'srcIp'        => 'SrcIp',
        'srcPort'      => 'SrcPort',
    ];

    public function validate()
    {
        if (null !== $this->dstContainer) {
            $this->dstContainer->validate();
        }
        if (null !== $this->srcContainer) {
            $this->srcContainer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstContainer) {
            $res['DstContainer'] = null !== $this->dstContainer ? $this->dstContainer->toArray($noStream) : $this->dstContainer;
        }

        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->srcContainer) {
            $res['SrcContainer'] = null !== $this->srcContainer ? $this->srcContainer->toArray($noStream) : $this->srcContainer;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
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
        if (isset($map['DstContainer'])) {
            $model->dstContainer = dstContainer::fromMap($map['DstContainer']);
        }

        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['SrcContainer'])) {
            $model->srcContainer = srcContainer::fromMap($map['SrcContainer']);
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        return $model;
    }
}
