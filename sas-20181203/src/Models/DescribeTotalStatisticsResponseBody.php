<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeTotalStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $account;

    /**
     * @var int
     */
    public $health;

    /**
     * @var int
     */
    public $healthTotal;

    /**
     * @var int
     */
    public $healthdealedTotal;

    /**
     * @var int
     */
    public $healthhighTotal;

    /**
     * @var int
     */
    public $healthlowTotal;

    /**
     * @var int
     */
    public $healthmediumTotal;

    /**
     * @var int
     */
    public $healthseriousTotal;

    /**
     * @var int
     */
    public $newsuspicious;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var int
     */
    public $patch;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $suspicious;

    /**
     * @var int
     */
    public $suspiciousTotal;

    /**
     * @var int
     */
    public $suspiciousdealedTotal;

    /**
     * @var int
     */
    public $suspicioushighTotal;

    /**
     * @var int
     */
    public $suspiciouslowTotal;

    /**
     * @var int
     */
    public $suspiciousmediumTotal;

    /**
     * @var int
     */
    public $suspiciousseriousTotal;

    /**
     * @var int
     */
    public $trojan;

    /**
     * @var int
     */
    public $vul;

    /**
     * @var int
     */
    public $vulAsapSum;

    /**
     * @var int
     */
    public $vulDealedTotal;

    /**
     * @var int
     */
    public $vulLaterSum;

    /**
     * @var int
     */
    public $vulNntfSum;

    /**
     * @var int
     */
    public $vulTotal;
    protected $_name = [
        'account'                => 'Account',
        'health'                 => 'Health',
        'healthTotal'            => 'HealthTotal',
        'healthdealedTotal'      => 'HealthdealedTotal',
        'healthhighTotal'        => 'HealthhighTotal',
        'healthlowTotal'         => 'HealthlowTotal',
        'healthmediumTotal'      => 'HealthmediumTotal',
        'healthseriousTotal'     => 'HealthseriousTotal',
        'newsuspicious'          => 'Newsuspicious',
        'online'                 => 'Online',
        'patch'                  => 'Patch',
        'requestId'              => 'RequestId',
        'suspicious'             => 'Suspicious',
        'suspiciousTotal'        => 'SuspiciousTotal',
        'suspiciousdealedTotal'  => 'SuspiciousdealedTotal',
        'suspicioushighTotal'    => 'SuspicioushighTotal',
        'suspiciouslowTotal'     => 'SuspiciouslowTotal',
        'suspiciousmediumTotal'  => 'SuspiciousmediumTotal',
        'suspiciousseriousTotal' => 'SuspiciousseriousTotal',
        'trojan'                 => 'Trojan',
        'vul'                    => 'Vul',
        'vulAsapSum'             => 'VulAsapSum',
        'vulDealedTotal'         => 'VulDealedTotal',
        'vulLaterSum'            => 'VulLaterSum',
        'vulNntfSum'             => 'VulNntfSum',
        'vulTotal'               => 'VulTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }
        if (null !== $this->healthTotal) {
            $res['HealthTotal'] = $this->healthTotal;
        }
        if (null !== $this->healthdealedTotal) {
            $res['HealthdealedTotal'] = $this->healthdealedTotal;
        }
        if (null !== $this->healthhighTotal) {
            $res['HealthhighTotal'] = $this->healthhighTotal;
        }
        if (null !== $this->healthlowTotal) {
            $res['HealthlowTotal'] = $this->healthlowTotal;
        }
        if (null !== $this->healthmediumTotal) {
            $res['HealthmediumTotal'] = $this->healthmediumTotal;
        }
        if (null !== $this->healthseriousTotal) {
            $res['HealthseriousTotal'] = $this->healthseriousTotal;
        }
        if (null !== $this->newsuspicious) {
            $res['Newsuspicious'] = $this->newsuspicious;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->patch) {
            $res['Patch'] = $this->patch;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
        }
        if (null !== $this->suspiciousTotal) {
            $res['SuspiciousTotal'] = $this->suspiciousTotal;
        }
        if (null !== $this->suspiciousdealedTotal) {
            $res['SuspiciousdealedTotal'] = $this->suspiciousdealedTotal;
        }
        if (null !== $this->suspicioushighTotal) {
            $res['SuspicioushighTotal'] = $this->suspicioushighTotal;
        }
        if (null !== $this->suspiciouslowTotal) {
            $res['SuspiciouslowTotal'] = $this->suspiciouslowTotal;
        }
        if (null !== $this->suspiciousmediumTotal) {
            $res['SuspiciousmediumTotal'] = $this->suspiciousmediumTotal;
        }
        if (null !== $this->suspiciousseriousTotal) {
            $res['SuspiciousseriousTotal'] = $this->suspiciousseriousTotal;
        }
        if (null !== $this->trojan) {
            $res['Trojan'] = $this->trojan;
        }
        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }
        if (null !== $this->vulAsapSum) {
            $res['VulAsapSum'] = $this->vulAsapSum;
        }
        if (null !== $this->vulDealedTotal) {
            $res['VulDealedTotal'] = $this->vulDealedTotal;
        }
        if (null !== $this->vulLaterSum) {
            $res['VulLaterSum'] = $this->vulLaterSum;
        }
        if (null !== $this->vulNntfSum) {
            $res['VulNntfSum'] = $this->vulNntfSum;
        }
        if (null !== $this->vulTotal) {
            $res['VulTotal'] = $this->vulTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTotalStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }
        if (isset($map['HealthTotal'])) {
            $model->healthTotal = $map['HealthTotal'];
        }
        if (isset($map['HealthdealedTotal'])) {
            $model->healthdealedTotal = $map['HealthdealedTotal'];
        }
        if (isset($map['HealthhighTotal'])) {
            $model->healthhighTotal = $map['HealthhighTotal'];
        }
        if (isset($map['HealthlowTotal'])) {
            $model->healthlowTotal = $map['HealthlowTotal'];
        }
        if (isset($map['HealthmediumTotal'])) {
            $model->healthmediumTotal = $map['HealthmediumTotal'];
        }
        if (isset($map['HealthseriousTotal'])) {
            $model->healthseriousTotal = $map['HealthseriousTotal'];
        }
        if (isset($map['Newsuspicious'])) {
            $model->newsuspicious = $map['Newsuspicious'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Patch'])) {
            $model->patch = $map['Patch'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }
        if (isset($map['SuspiciousTotal'])) {
            $model->suspiciousTotal = $map['SuspiciousTotal'];
        }
        if (isset($map['SuspiciousdealedTotal'])) {
            $model->suspiciousdealedTotal = $map['SuspiciousdealedTotal'];
        }
        if (isset($map['SuspicioushighTotal'])) {
            $model->suspicioushighTotal = $map['SuspicioushighTotal'];
        }
        if (isset($map['SuspiciouslowTotal'])) {
            $model->suspiciouslowTotal = $map['SuspiciouslowTotal'];
        }
        if (isset($map['SuspiciousmediumTotal'])) {
            $model->suspiciousmediumTotal = $map['SuspiciousmediumTotal'];
        }
        if (isset($map['SuspiciousseriousTotal'])) {
            $model->suspiciousseriousTotal = $map['SuspiciousseriousTotal'];
        }
        if (isset($map['Trojan'])) {
            $model->trojan = $map['Trojan'];
        }
        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }
        if (isset($map['VulAsapSum'])) {
            $model->vulAsapSum = $map['VulAsapSum'];
        }
        if (isset($map['VulDealedTotal'])) {
            $model->vulDealedTotal = $map['VulDealedTotal'];
        }
        if (isset($map['VulLaterSum'])) {
            $model->vulLaterSum = $map['VulLaterSum'];
        }
        if (isset($map['VulNntfSum'])) {
            $model->vulNntfSum = $map['VulNntfSum'];
        }
        if (isset($map['VulTotal'])) {
            $model->vulTotal = $map['VulTotal'];
        }

        return $model;
    }
}
