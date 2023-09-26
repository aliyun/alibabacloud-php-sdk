<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaClusterBaseLineListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The alias of the baseline.
     *
     * @example Make sure there are no duplicate usernames or UIDs
     *
     * @var string
     */
    public $alias;

    /**
     * @description The key of the baseline type.
     *
     * @example identification
     *
     * @var string
     */
    public $classKey;

    /**
     * @description The key of the name for the baseline check item.
     *
     * @example duplicate_uid
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
     * @return data
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
