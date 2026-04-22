<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeInterAuthStatisticsGlobalOverviewRequest extends Model
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
    public $overviewPeriod;

    /**
     * @var string
     */
    public $serverRegion;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clientToken' => 'ClientToken',
        'overviewPeriod' => 'OverviewPeriod',
        'serverRegion' => 'ServerRegion',
    ];

    public function validate()
    {
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

        if (isset($map['OverviewPeriod'])) {
            $model->overviewPeriod = $map['OverviewPeriod'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
        }

        return $model;
    }
}
