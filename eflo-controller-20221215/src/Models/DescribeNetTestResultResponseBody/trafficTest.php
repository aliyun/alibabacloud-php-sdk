<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\trafficTest\clients;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\trafficTest\servers;

/**
 * @internal
 *
 * @coversNothing
 */
class trafficTest extends Model
{
    /**
     * @var clients[]
     */
    public $clients;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $GDR;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $QP;

    /**
     * @var servers[]
     */
    public $servers;

    /**
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

    public function validate()
    {
        if (\is_array($this->clients)) {
            Model::validateArray($this->clients);
        }
        if (\is_array($this->servers)) {
            Model::validateArray($this->servers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clients) {
            if (\is_array($this->clients)) {
                $res['Clients'] = [];
                $n1 = 0;
                foreach ($this->clients as $item1) {
                    $res['Clients'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->servers)) {
                $res['Servers'] = [];
                $n1 = 0;
                foreach ($this->servers as $item1) {
                    $res['Servers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->trafficModel) {
            $res['TrafficModel'] = $this->trafficModel;
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
        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n1 = 0;
                foreach ($map['Clients'] as $item1) {
                    $model->clients[$n1++] = clients::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Servers'] as $item1) {
                    $model->servers[$n1++] = servers::fromMap($item1);
                }
            }
        }

        if (isset($map['TrafficModel'])) {
            $model->trafficModel = $map['TrafficModel'];
        }

        return $model;
    }
}
