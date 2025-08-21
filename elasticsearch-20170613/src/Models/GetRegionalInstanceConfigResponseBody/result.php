<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\clientNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\clientNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\dataNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\dataNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\masterDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\warmNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\warmNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResultSpecInfoMapValue;

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

    /**
     * @var warmNodeAmountRange
     */
    public $warmNodeAmountRange;

    /**
     * @var warmNodeDiskList[]
     */
    public $warmNodeDiskList;

    /**
     * @var string[]
     */
    public $warmNodeSpecs;
    protected $_name = [
        'clientNodeAmountRange' => 'clientNodeAmountRange',
        'clientNodeDiskList' => 'clientNodeDiskList',
        'clientSpecs' => 'clientSpecs',
        'dataNodeAmountRange' => 'dataNodeAmountRange',
        'dataNodeDiskList' => 'dataNodeDiskList',
        'dataNodeSpecs' => 'dataNodeSpecs',
        'kibanaSpecs' => 'kibanaSpecs',
        'masterAmountRange' => 'masterAmountRange',
        'masterDiskList' => 'masterDiskList',
        'masterSpecs' => 'masterSpecs',
        'specInfoMap' => 'specInfoMap',
        'versions' => 'versions',
        'warmNodeAmountRange' => 'warmNodeAmountRange',
        'warmNodeDiskList' => 'warmNodeDiskList',
        'warmNodeSpecs' => 'warmNodeSpecs',
    ];

    public function validate()
    {
        if (null !== $this->clientNodeAmountRange) {
            $this->clientNodeAmountRange->validate();
        }
        if (\is_array($this->clientNodeDiskList)) {
            Model::validateArray($this->clientNodeDiskList);
        }
        if (\is_array($this->clientSpecs)) {
            Model::validateArray($this->clientSpecs);
        }
        if (null !== $this->dataNodeAmountRange) {
            $this->dataNodeAmountRange->validate();
        }
        if (\is_array($this->dataNodeDiskList)) {
            Model::validateArray($this->dataNodeDiskList);
        }
        if (\is_array($this->dataNodeSpecs)) {
            Model::validateArray($this->dataNodeSpecs);
        }
        if (\is_array($this->kibanaSpecs)) {
            Model::validateArray($this->kibanaSpecs);
        }
        if (\is_array($this->masterAmountRange)) {
            Model::validateArray($this->masterAmountRange);
        }
        if (\is_array($this->masterDiskList)) {
            Model::validateArray($this->masterDiskList);
        }
        if (\is_array($this->masterSpecs)) {
            Model::validateArray($this->masterSpecs);
        }
        if (\is_array($this->specInfoMap)) {
            Model::validateArray($this->specInfoMap);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        if (null !== $this->warmNodeAmountRange) {
            $this->warmNodeAmountRange->validate();
        }
        if (\is_array($this->warmNodeDiskList)) {
            Model::validateArray($this->warmNodeDiskList);
        }
        if (\is_array($this->warmNodeSpecs)) {
            Model::validateArray($this->warmNodeSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientNodeAmountRange) {
            $res['clientNodeAmountRange'] = null !== $this->clientNodeAmountRange ? $this->clientNodeAmountRange->toArray($noStream) : $this->clientNodeAmountRange;
        }

        if (null !== $this->clientNodeDiskList) {
            if (\is_array($this->clientNodeDiskList)) {
                $res['clientNodeDiskList'] = [];
                $n1 = 0;
                foreach ($this->clientNodeDiskList as $item1) {
                    $res['clientNodeDiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientSpecs) {
            if (\is_array($this->clientSpecs)) {
                $res['clientSpecs'] = [];
                $n1 = 0;
                foreach ($this->clientSpecs as $item1) {
                    $res['clientSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataNodeAmountRange) {
            $res['dataNodeAmountRange'] = null !== $this->dataNodeAmountRange ? $this->dataNodeAmountRange->toArray($noStream) : $this->dataNodeAmountRange;
        }

        if (null !== $this->dataNodeDiskList) {
            if (\is_array($this->dataNodeDiskList)) {
                $res['dataNodeDiskList'] = [];
                $n1 = 0;
                foreach ($this->dataNodeDiskList as $item1) {
                    $res['dataNodeDiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataNodeSpecs) {
            if (\is_array($this->dataNodeSpecs)) {
                $res['dataNodeSpecs'] = [];
                $n1 = 0;
                foreach ($this->dataNodeSpecs as $item1) {
                    $res['dataNodeSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kibanaSpecs) {
            if (\is_array($this->kibanaSpecs)) {
                $res['kibanaSpecs'] = [];
                $n1 = 0;
                foreach ($this->kibanaSpecs as $item1) {
                    $res['kibanaSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->masterAmountRange) {
            if (\is_array($this->masterAmountRange)) {
                $res['masterAmountRange'] = [];
                $n1 = 0;
                foreach ($this->masterAmountRange as $item1) {
                    $res['masterAmountRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->masterDiskList) {
            if (\is_array($this->masterDiskList)) {
                $res['masterDiskList'] = [];
                $n1 = 0;
                foreach ($this->masterDiskList as $item1) {
                    $res['masterDiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->masterSpecs) {
            if (\is_array($this->masterSpecs)) {
                $res['masterSpecs'] = [];
                $n1 = 0;
                foreach ($this->masterSpecs as $item1) {
                    $res['masterSpecs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->specInfoMap) {
            if (\is_array($this->specInfoMap)) {
                $res['specInfoMap'] = [];
                foreach ($this->specInfoMap as $key1 => $value1) {
                    $res['specInfoMap'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warmNodeAmountRange) {
            $res['warmNodeAmountRange'] = null !== $this->warmNodeAmountRange ? $this->warmNodeAmountRange->toArray($noStream) : $this->warmNodeAmountRange;
        }

        if (null !== $this->warmNodeDiskList) {
            if (\is_array($this->warmNodeDiskList)) {
                $res['warmNodeDiskList'] = [];
                $n1 = 0;
                foreach ($this->warmNodeDiskList as $item1) {
                    $res['warmNodeDiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warmNodeSpecs) {
            if (\is_array($this->warmNodeSpecs)) {
                $res['warmNodeSpecs'] = [];
                $n1 = 0;
                foreach ($this->warmNodeSpecs as $item1) {
                    $res['warmNodeSpecs'][$n1] = $item1;
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
        if (isset($map['clientNodeAmountRange'])) {
            $model->clientNodeAmountRange = clientNodeAmountRange::fromMap($map['clientNodeAmountRange']);
        }

        if (isset($map['clientNodeDiskList'])) {
            if (!empty($map['clientNodeDiskList'])) {
                $model->clientNodeDiskList = [];
                $n1 = 0;
                foreach ($map['clientNodeDiskList'] as $item1) {
                    $model->clientNodeDiskList[$n1] = clientNodeDiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clientSpecs'])) {
            if (!empty($map['clientSpecs'])) {
                $model->clientSpecs = [];
                $n1 = 0;
                foreach ($map['clientSpecs'] as $item1) {
                    $model->clientSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dataNodeAmountRange'])) {
            $model->dataNodeAmountRange = dataNodeAmountRange::fromMap($map['dataNodeAmountRange']);
        }

        if (isset($map['dataNodeDiskList'])) {
            if (!empty($map['dataNodeDiskList'])) {
                $model->dataNodeDiskList = [];
                $n1 = 0;
                foreach ($map['dataNodeDiskList'] as $item1) {
                    $model->dataNodeDiskList[$n1] = dataNodeDiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dataNodeSpecs'])) {
            if (!empty($map['dataNodeSpecs'])) {
                $model->dataNodeSpecs = [];
                $n1 = 0;
                foreach ($map['dataNodeSpecs'] as $item1) {
                    $model->dataNodeSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['kibanaSpecs'])) {
            if (!empty($map['kibanaSpecs'])) {
                $model->kibanaSpecs = [];
                $n1 = 0;
                foreach ($map['kibanaSpecs'] as $item1) {
                    $model->kibanaSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['masterAmountRange'])) {
            if (!empty($map['masterAmountRange'])) {
                $model->masterAmountRange = [];
                $n1 = 0;
                foreach ($map['masterAmountRange'] as $item1) {
                    $model->masterAmountRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['masterDiskList'])) {
            if (!empty($map['masterDiskList'])) {
                $model->masterDiskList = [];
                $n1 = 0;
                foreach ($map['masterDiskList'] as $item1) {
                    $model->masterDiskList[$n1] = masterDiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['masterSpecs'])) {
            if (!empty($map['masterSpecs'])) {
                $model->masterSpecs = [];
                $n1 = 0;
                foreach ($map['masterSpecs'] as $item1) {
                    $model->masterSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['specInfoMap'])) {
            if (!empty($map['specInfoMap'])) {
                $model->specInfoMap = [];
                foreach ($map['specInfoMap'] as $key1 => $value1) {
                    $model->specInfoMap[$key1] = ResultSpecInfoMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['warmNodeAmountRange'])) {
            $model->warmNodeAmountRange = warmNodeAmountRange::fromMap($map['warmNodeAmountRange']);
        }

        if (isset($map['warmNodeDiskList'])) {
            if (!empty($map['warmNodeDiskList'])) {
                $model->warmNodeDiskList = [];
                $n1 = 0;
                foreach ($map['warmNodeDiskList'] as $item1) {
                    $model->warmNodeDiskList[$n1] = warmNodeDiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['warmNodeSpecs'])) {
            if (!empty($map['warmNodeSpecs'])) {
                $model->warmNodeSpecs = [];
                $n1 = 0;
                foreach ($map['warmNodeSpecs'] as $item1) {
                    $model->warmNodeSpecs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
