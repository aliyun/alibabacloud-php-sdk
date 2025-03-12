<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList\baselineNameList;

use AlibabaCloud\Tea\Model;

class baselineItemList extends Model
{
    /**
     * @description The alias of the baseline check item.
     *
     * @example Ensure that no accounts use the same Hash password.
     *
     * @var string
     */
    public $alias;

    /**
     * @description The key of the type for the baseline.
     *
     * @example identification
     *
     * @var string
     */
    public $classKey;

    /**
     * @description The key of the name for the baseline check item.
     *
     * @example duplicate_pwd_hash
     *
     * @var string
     */
    public $itemKey;

    /**
     * @description The key of the name for the baseline.
     *
     * @example identification
     *
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'alias'    => 'Alias',
        'classKey' => 'ClassKey',
        'itemKey'  => 'ItemKey',
        'nameKey'  => 'NameKey',
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
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }
        if (null !== $this->itemKey) {
            $res['ItemKey'] = $this->itemKey;
        }
        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }
        if (isset($map['ItemKey'])) {
            $model->itemKey = $map['ItemKey'];
        }
        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
