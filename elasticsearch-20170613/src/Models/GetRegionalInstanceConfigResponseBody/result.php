<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\clientNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\clientNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\dataNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\dataNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\masterDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResultSpecInfoMapValue;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var clientNodeAmountRange
     */
    public $clientNodeAmountRange;

    /**
     * @var clientNodeDiskList[]
     */
    public $clientNodeDiskList;

    /**
     * @var string[]
     */
    public $clientSpecs;

    /**
     * @var dataNodeAmountRange
     */
    public $dataNodeAmountRange;

    /**
     * @var dataNodeDiskList[]
     */
    public $dataNodeDiskList;

    /**
     * @var string[]
     */
    public $dataNodeSpecs;

    /**
     * @var string[]
     */
    public $kibanaSpecs;

    /**
     * @var string[]
     */
    public $masterAmountRange;

    /**
     * @var masterDiskList[]
     */
    public $masterDiskList;

    /**
     * @var string[]
     */
    public $masterSpecs;

    /**
     * @var ResultSpecInfoMapValue[]
     */
    public $specInfoMap;

    /**
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'clientNodeAmountRange' => 'clientNodeAmountRange',
        'clientNodeDiskList'    => 'clientNodeDiskList',
        'clientSpecs'           => 'clientSpecs',
        'dataNodeAmountRange'   => 'dataNodeAmountRange',
        'dataNodeDiskList'      => 'dataNodeDiskList',
        'dataNodeSpecs'         => 'dataNodeSpecs',
        'kibanaSpecs'           => 'kibanaSpecs',
        'masterAmountRange'     => 'masterAmountRange',
        'masterDiskList'        => 'masterDiskList',
        'masterSpecs'           => 'masterSpecs',
        'specInfoMap'           => 'specInfoMap',
        'versions'              => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientNodeAmountRange) {
            $res['clientNodeAmountRange'] = null !== $this->clientNodeAmountRange ? $this->clientNodeAmountRange->toMap() : null;
        }
        if (null !== $this->clientNodeDiskList) {
            $res['clientNodeDiskList'] = [];
            if (null !== $this->clientNodeDiskList && \is_array($this->clientNodeDiskList)) {
                $n = 0;
                foreach ($this->clientNodeDiskList as $item) {
                    $res['clientNodeDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientSpecs) {
            $res['clientSpecs'] = $this->clientSpecs;
        }
        if (null !== $this->dataNodeAmountRange) {
            $res['dataNodeAmountRange'] = null !== $this->dataNodeAmountRange ? $this->dataNodeAmountRange->toMap() : null;
        }
        if (null !== $this->dataNodeDiskList) {
            $res['dataNodeDiskList'] = [];
            if (null !== $this->dataNodeDiskList && \is_array($this->dataNodeDiskList)) {
                $n = 0;
                foreach ($this->dataNodeDiskList as $item) {
                    $res['dataNodeDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataNodeSpecs) {
            $res['dataNodeSpecs'] = $this->dataNodeSpecs;
        }
        if (null !== $this->kibanaSpecs) {
            $res['kibanaSpecs'] = $this->kibanaSpecs;
        }
        if (null !== $this->masterAmountRange) {
            $res['masterAmountRange'] = $this->masterAmountRange;
        }
        if (null !== $this->masterDiskList) {
            $res['masterDiskList'] = [];
            if (null !== $this->masterDiskList && \is_array($this->masterDiskList)) {
                $n = 0;
                foreach ($this->masterDiskList as $item) {
                    $res['masterDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->masterSpecs) {
            $res['masterSpecs'] = $this->masterSpecs;
        }
        if (null !== $this->specInfoMap) {
            $res['specInfoMap'] = [];
            if (null !== $this->specInfoMap && \is_array($this->specInfoMap)) {
                foreach ($this->specInfoMap as $key => $val) {
                    $res['specInfoMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientNodeAmountRange'])) {
            $model->clientNodeAmountRange = clientNodeAmountRange::fromMap($map['clientNodeAmountRange']);
        }
        if (isset($map['clientNodeDiskList'])) {
            if (!empty($map['clientNodeDiskList'])) {
                $model->clientNodeDiskList = [];
                $n                         = 0;
                foreach ($map['clientNodeDiskList'] as $item) {
                    $model->clientNodeDiskList[$n++] = null !== $item ? clientNodeDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['clientSpecs'])) {
            if (!empty($map['clientSpecs'])) {
                $model->clientSpecs = $map['clientSpecs'];
            }
        }
        if (isset($map['dataNodeAmountRange'])) {
            $model->dataNodeAmountRange = dataNodeAmountRange::fromMap($map['dataNodeAmountRange']);
        }
        if (isset($map['dataNodeDiskList'])) {
            if (!empty($map['dataNodeDiskList'])) {
                $model->dataNodeDiskList = [];
                $n                       = 0;
                foreach ($map['dataNodeDiskList'] as $item) {
                    $model->dataNodeDiskList[$n++] = null !== $item ? dataNodeDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dataNodeSpecs'])) {
            if (!empty($map['dataNodeSpecs'])) {
                $model->dataNodeSpecs = $map['dataNodeSpecs'];
            }
        }
        if (isset($map['kibanaSpecs'])) {
            if (!empty($map['kibanaSpecs'])) {
                $model->kibanaSpecs = $map['kibanaSpecs'];
            }
        }
        if (isset($map['masterAmountRange'])) {
            if (!empty($map['masterAmountRange'])) {
                $model->masterAmountRange = $map['masterAmountRange'];
            }
        }
        if (isset($map['masterDiskList'])) {
            if (!empty($map['masterDiskList'])) {
                $model->masterDiskList = [];
                $n                     = 0;
                foreach ($map['masterDiskList'] as $item) {
                    $model->masterDiskList[$n++] = null !== $item ? masterDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['masterSpecs'])) {
            if (!empty($map['masterSpecs'])) {
                $model->masterSpecs = $map['masterSpecs'];
            }
        }
        if (isset($map['specInfoMap'])) {
            $model->specInfoMap = $map['specInfoMap'];
        }
        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = $map['versions'];
            }
        }

        return $model;
    }
}
