<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsReportsResponseBody;

use AlibabaCloud\Tea\Model;

class smsReports extends Model
{
    /**
     * @example appid
     *
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $chargedCount;

    /**
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @example event_xxxx
     *
     * @var string
     */
    public $eventId;

    /**
     * @example 156xxxxxxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @example "d36xxxxx3573772f159f616ebJ8KGPBg7Hr::appId::123456::Bird"
     *
     * @var string
     */
    public $sn;

    /**
     * @example DELIVRD
     *
     * @var string
     */
    public $stat;

    /**
     * @example d36a370f33f037233573772f15xxxxxx
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 3514
     *
     * @var string
     */
    public $tid;

    /**
     * @example 20220823171446
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'appId'        => 'AppId',
        'chargedCount' => 'ChargedCount',
        'code'         => 'Code',
        'eventId'      => 'EventId',
        'mobile'       => 'Mobile',
        'sn'           => 'Sn',
        'stat'         => 'Stat',
        'tenantId'     => 'TenantId',
        'tid'          => 'Tid',
        'time'         => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->chargedCount) {
            $res['ChargedCount'] = $this->chargedCount;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->stat) {
            $res['Stat'] = $this->stat;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChargedCount'])) {
            $model->chargedCount = $map['ChargedCount'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Stat'])) {
            $model->stat = $map['Stat'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
