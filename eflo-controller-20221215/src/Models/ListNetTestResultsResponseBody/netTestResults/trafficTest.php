<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\trafficTest\clients;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\trafficTest\servers;
use AlibabaCloud\Tea\Model;

/**
 * @internal
 *
 * @coversNothing
 */
class trafficTest extends Model
{
    /**
     * @description Clients
     *
     * @var clients[]
     */
    public $clients;

    /**
     * @description Duration of the workflow task, in seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description 协议为RDMA时，填写True/False，
     * 协议为TCP时，此字段为空。
     *
     * @example True
     *
     * @var string
     */
    public $GDR;

    /**
     * @description Network protocol, either RDMA or TCP.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description For TCP, enter the number of concurrent connections; for RDMA, enter the configured QP value.
     *
     * @example RDMA
     *
     * @var int
     */
    public $QP;

    /**
     * @description This field is empty when the traffic model (TrafficModel) is Fullmesh.
     *
     * @var servers[]
     */
    public $servers;

    /**
     * @description Traffic model, either MTON or Fullmesh.
     *
     * @example Fullmesh
     *
     * @var string
     */
    public $trafficModel;
    protected $_name = [
        'clients' => 'Clients',
        'duration' => 'Duration',
        'GDR' => 'GDR',
        'protocol' => 'Protocol',
        'QP' => 'QP',
        'servers' => 'Servers',
        'trafficModel' => 'TrafficModel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clients) {
            $res['Clients'] = [];
            if (null !== $this->clients && \is_array($this->clients)) {
                $n = 0;
                foreach ($this->clients as $item) {
                    $res['Clients'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->GDR) {
            $res['GDR'] = $this->GDR;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->QP) {
            $res['QP'] = $this->QP;
        }
        if (null !== $this->servers) {
            $res['Servers'] = [];
            if (null !== $this->servers && \is_array($this->servers)) {
                $n = 0;
                foreach ($this->servers as $item) {
                    $res['Servers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficModel) {
            $res['TrafficModel'] = $this->trafficModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficTest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n = 0;
                foreach ($map['Clients'] as $item) {
                    $model->clients[$n++] = null !== $item ? clients::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GDR'])) {
            $model->GDR = $map['GDR'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['QP'])) {
            $model->QP = $map['QP'];
        }
        if (isset($map['Servers'])) {
            if (!empty($map['Servers'])) {
                $model->servers = [];
                $n = 0;
                foreach ($map['Servers'] as $item) {
                    $model->servers[$n++] = null !== $item ? servers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficModel'])) {
            $model->trafficModel = $map['TrafficModel'];
        }

        return $model;
    }
}
