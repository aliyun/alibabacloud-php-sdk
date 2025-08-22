<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos;

class DescribeDcdnDdosSpecInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $isSpecialPort;

    /**
     * @var string
     */
    public $protectedArea;

    /**
     * @var string
     */
    public $qpsLimit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var specInfos[]
     */
    public $specInfos;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'edition' => 'Edition',
        'enable' => 'Enable',
        'isSpecialPort' => 'IsSpecialPort',
        'protectedArea' => 'ProtectedArea',
        'qpsLimit' => 'QpsLimit',
        'requestId' => 'RequestId',
        'specInfos' => 'SpecInfos',
    ];

    public function validate()
    {
        if (\is_array($this->specInfos)) {
            Model::validateArray($this->specInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->specInfos)) {
                $res['SpecInfos'] = [];
                $n1 = 0;
                foreach ($this->specInfos as $item1) {
                    $res['SpecInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['SpecInfos'] as $item1) {
                    $model->specInfos[$n1] = specInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
