<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDdosSpecInfoResponseBody extends Model
{
    /**
     * @description The bandwidth limit of a single instance.
     *
     * @example 40Gbps
     *
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @description The version. Valid values:
     *
     * **poc**: POC Edition
     * **basic**: Basic Edition
     * **insurance**: Insurance Edition
     * **unlimited**: Unlimited Edition
     * **port_enhancement**: Special Port Enhanced Edition
     *
     * @example insurance
     *
     * @var string
     */
    public $edition;

    /**
     * @description Specifies whether to enable DDoS mitigation. Valid values:
     *
     *   **on:**
     *   **off**.
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description Specifies whether custom ports are supported. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $isSpecialPort;

    /**
     * @description Protected region. Valid values:
     *
     * **global**: global
     * **chinese_mainland**: Chinese mainland
     * **global_excluding_the_chinese_mainland**: outside the Chinese mainland
     *
     * @example global
     *
     * @var string
     */
    public $protectedArea;

    /**
     * @description The QPS limit.
     *
     * @example 100
     *
     * @var string
     */
    public $qpsLimit;

    /**
     * @description The ID of the request.
     *
     * @example DEA8E7BE-33C6-56F5-AC56-74D50547CF34
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code and configurations of the security rules.
     *
     * @var specInfos[]
     */
    public $specInfos;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'edition'        => 'Edition',
        'enable'         => 'Enable',
        'isSpecialPort'  => 'IsSpecialPort',
        'protectedArea'  => 'ProtectedArea',
        'qpsLimit'       => 'QpsLimit',
        'requestId'      => 'RequestId',
        'specInfos'      => 'SpecInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->isSpecialPort) {
            $res['IsSpecialPort'] = $this->isSpecialPort;
        }
        if (null !== $this->protectedArea) {
            $res['ProtectedArea'] = $this->protectedArea;
        }
        if (null !== $this->qpsLimit) {
            $res['QpsLimit'] = $this->qpsLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specInfos) {
            $res['SpecInfos'] = [];
            if (null !== $this->specInfos && \is_array($this->specInfos)) {
                $n = 0;
                foreach ($this->specInfos as $item) {
                    $res['SpecInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDdosSpecInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['IsSpecialPort'])) {
            $model->isSpecialPort = $map['IsSpecialPort'];
        }
        if (isset($map['ProtectedArea'])) {
            $model->protectedArea = $map['ProtectedArea'];
        }
        if (isset($map['QpsLimit'])) {
            $model->qpsLimit = $map['QpsLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecInfos'])) {
            if (!empty($map['SpecInfos'])) {
                $model->specInfos = [];
                $n                = 0;
                foreach ($map['SpecInfos'] as $item) {
                    $model->specInfos[$n++] = null !== $item ? specInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
