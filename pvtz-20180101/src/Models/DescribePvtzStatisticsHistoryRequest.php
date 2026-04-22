<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribePvtzStatisticsHistoryRequest\networkParams;

class DescribePvtzStatisticsHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTimestamp;

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
    public $rcode;

    /**
     * @var string
     */
    public $serverRegion;

    /**
     * @var string
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $statisticalType;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTimestamp' => 'EndTimestamp',
        'module' => 'Module',
        'networkParams' => 'NetworkParams',
        'rcode' => 'Rcode',
        'serverRegion' => 'ServerRegion',
        'startTimestamp' => 'StartTimestamp',
        'statisticalType' => 'StatisticalType',
        'zoneName' => 'ZoneName',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
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

        if (null !== $this->rcode) {
            $res['Rcode'] = $this->rcode;
        }

        if (null !== $this->serverRegion) {
            $res['ServerRegion'] = $this->serverRegion;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        if (null !== $this->statisticalType) {
            $res['StatisticalType'] = $this->statisticalType;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
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

        if (isset($map['Rcode'])) {
            $model->rcode = $map['Rcode'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        if (isset($map['StatisticalType'])) {
            $model->statisticalType = $map['StatisticalType'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
