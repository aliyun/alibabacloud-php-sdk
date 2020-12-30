<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosIpConfigResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $cleanStatus;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $configDomainCount;

    /**
     * @var string
     */
    public $line;

    /**
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @var string
     */
    public $lbId;

    /**
     * @var int
     */
    public $configPortCount;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $totalDefenseCount;
    protected $_name = [
        'status'            => 'Status',
        'cleanStatus'       => 'CleanStatus',
        'bandwidth'         => 'Bandwidth',
        'configDomainCount' => 'ConfigDomainCount',
        'line'              => 'Line',
        'elasticBandwidth'  => 'ElasticBandwidth',
        'lbId'              => 'LbId',
        'configPortCount'   => 'ConfigPortCount',
        'ip'                => 'Ip',
        'totalDefenseCount' => 'TotalDefenseCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cleanStatus) {
            $res['CleanStatus'] = $this->cleanStatus;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->configDomainCount) {
            $res['ConfigDomainCount'] = $this->configDomainCount;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->lbId) {
            $res['LbId'] = $this->lbId;
        }
        if (null !== $this->configPortCount) {
            $res['ConfigPortCount'] = $this->configPortCount;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->totalDefenseCount) {
            $res['TotalDefenseCount'] = $this->totalDefenseCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CleanStatus'])) {
            $model->cleanStatus = $map['CleanStatus'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ConfigDomainCount'])) {
            $model->configDomainCount = $map['ConfigDomainCount'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['LbId'])) {
            $model->lbId = $map['LbId'];
        }
        if (isset($map['ConfigPortCount'])) {
            $model->configPortCount = $map['ConfigPortCount'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['TotalDefenseCount'])) {
            $model->totalDefenseCount = $map['TotalDefenseCount'];
        }

        return $model;
    }
}
