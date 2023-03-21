<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList\baselineNameList\baselineItemList;
use AlibabaCloud\Tea\Model;

class baselineNameList extends Model
{
    /**
     * @description The alias of the baseline.
     *
     * @example Identity authentication
     *
     * @var string
     */
    public $alias;

    /**
     * @description An array that consists of baseline check items.
     *
     * @var baselineItemList[]
     */
    public $baselineItemList;

    /**
     * @description The key of the type for the baseline.
     *
     * @example identification
     *
     * @var string
     */
    public $classKey;

    /**
     * @description The key of the name for the baseline.
     *
     * @example identification
     *
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'alias'            => 'Alias',
        'baselineItemList' => 'BaselineItemList',
        'classKey'         => 'ClassKey',
        'nameKey'          => 'NameKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->baselineItemList) {
            $res['BaselineItemList'] = [];
            if (null !== $this->baselineItemList && \is_array($this->baselineItemList)) {
                $n = 0;
                foreach ($this->baselineItemList as $item) {
                    $res['BaselineItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }
        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BaselineItemList'])) {
            if (!empty($map['BaselineItemList'])) {
                $model->baselineItemList = [];
                $n                       = 0;
                foreach ($map['BaselineItemList'] as $item) {
                    $model->baselineItemList[$n++] = null !== $item ? baselineItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }
        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
