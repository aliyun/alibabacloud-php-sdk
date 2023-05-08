<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList\baselineNameList;
use AlibabaCloud\Tea\Model;

class baselineClassList extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var baselineNameList[]
     */
    public $baselineNameList;

    /**
     * @example identification
     *
     * @var string
     */
    public $classKey;
    protected $_name = [
        'alias'            => 'Alias',
        'baselineNameList' => 'BaselineNameList',
        'classKey'         => 'ClassKey',
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
        if (null !== $this->baselineNameList) {
            $res['BaselineNameList'] = [];
            if (null !== $this->baselineNameList && \is_array($this->baselineNameList)) {
                $n = 0;
                foreach ($this->baselineNameList as $item) {
                    $res['BaselineNameList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BaselineNameList'])) {
            if (!empty($map['BaselineNameList'])) {
                $model->baselineNameList = [];
                $n                       = 0;
                foreach ($map['BaselineNameList'] as $item) {
                    $model->baselineNameList[$n++] = null !== $item ? baselineNameList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }

        return $model;
    }
}
