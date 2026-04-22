<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribePvtzStatisticsZoneOverviewRequest\networkParams;

class DescribePvtzStatisticsZoneOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $module;

    /**
     * @var networkParams[]
     */
    public $networkParams;

    /**
     * @var string
     */
    public $overviewPeriod;

    /**
     * @var string
     */
    public $serverRegion;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clientToken' => 'ClientToken',
        'module' => 'Module',
        'networkParams' => 'NetworkParams',
        'overviewPeriod' => 'OverviewPeriod',
        'serverRegion' => 'ServerRegion',
    ];

    public function validate()
    {
        if (\is_array($this->networkParams)) {
            Model::validateArray($this->networkParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->networkParams) {
            if (\is_array($this->networkParams)) {
                $res['NetworkParams'] = [];
                $n1 = 0;
                foreach ($this->networkParams as $item1) {
                    $res['NetworkParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->overviewPeriod) {
            $res['OverviewPeriod'] = $this->overviewPeriod;
        }

        if (null !== $this->serverRegion) {
            $res['ServerRegion'] = $this->serverRegion;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['NetworkParams'])) {
            if (!empty($map['NetworkParams'])) {
                $model->networkParams = [];
                $n1 = 0;
                foreach ($map['NetworkParams'] as $item1) {
                    $model->networkParams[$n1] = networkParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OverviewPeriod'])) {
            $model->overviewPeriod = $map['OverviewPeriod'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
        }

        return $model;
    }
}
