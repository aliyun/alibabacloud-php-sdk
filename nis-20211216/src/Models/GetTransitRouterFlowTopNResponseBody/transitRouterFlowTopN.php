<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetTransitRouterFlowTopNResponseBody;

use AlibabaCloud\Dara\Model;

class transitRouterFlowTopN extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $bandwithPackageId;

    /**
     * @var float
     */
    public $bytes;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherPort;

    /**
     * @var string
     */
    public $otherRegion;

    /**
     * @var float
     */
    public $packets;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $thisIp;

    /**
     * @var string
     */
    public $thisPort;

    /**
     * @var string
     */
    public $thisRegion;
    protected $_name = [
        'accountId' => 'AccountId',
        'bandwithPackageId' => 'BandwithPackageId',
        'bytes' => 'Bytes',
        'cenId' => 'CenId',
        'endTime' => 'EndTime',
        'otherIp' => 'OtherIp',
        'otherPort' => 'OtherPort',
        'otherRegion' => 'OtherRegion',
        'packets' => 'Packets',
        'protocol' => 'Protocol',
        'startTime' => 'StartTime',
        'thisIp' => 'ThisIp',
        'thisPort' => 'ThisPort',
        'thisRegion' => 'ThisRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->bandwithPackageId) {
            $res['BandwithPackageId'] = $this->bandwithPackageId;
        }

        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }

        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }

        if (null !== $this->otherRegion) {
            $res['OtherRegion'] = $this->otherRegion;
        }

        if (null !== $this->packets) {
            $res['Packets'] = $this->packets;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->thisIp) {
            $res['ThisIp'] = $this->thisIp;
        }

        if (null !== $this->thisPort) {
            $res['ThisPort'] = $this->thisPort;
        }

        if (null !== $this->thisRegion) {
            $res['ThisRegion'] = $this->thisRegion;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['BandwithPackageId'])) {
            $model->bandwithPackageId = $map['BandwithPackageId'];
        }

        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }

        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }

        if (isset($map['OtherRegion'])) {
            $model->otherRegion = $map['OtherRegion'];
        }

        if (isset($map['Packets'])) {
            $model->packets = $map['Packets'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ThisIp'])) {
            $model->thisIp = $map['ThisIp'];
        }

        if (isset($map['ThisPort'])) {
            $model->thisPort = $map['ThisPort'];
        }

        if (isset($map['ThisRegion'])) {
            $model->thisRegion = $map['ThisRegion'];
        }

        return $model;
    }
}
