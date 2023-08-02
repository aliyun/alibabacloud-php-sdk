<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDdosSpecInfoResponseBody extends Model
{
    /**
     * @example 40Gbps
     *
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @example insurance
     *
     * @var string
     */
    public $edition;

    /**
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @example global
     *
     * @var string
     */
    public $protectedArea;

    /**
     * @example 100
     *
     * @var string
     */
    public $qpsLimit;

    /**
     * @example DEA8E7BE-33C6-56F5-AC56-74D50547CF34
     *
     * @var string
     */
    public $requestId;

    /**
     * @var specInfos[]
     */
    public $specInfos;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'edition'        => 'Edition',
        'enable'         => 'Enable',
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
