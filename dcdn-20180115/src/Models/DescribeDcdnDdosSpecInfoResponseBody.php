<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDdosSpecInfoResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var specInfos[]
     */
    public $specInfos;
    protected $_name = [
        'edition'   => 'Edition',
        'enable'    => 'Enable',
        'requestId' => 'RequestId',
        'specInfos' => 'SpecInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
