<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery;

use AlibabaCloud\Tea\Model;

class filterList extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $exclude;

    /**
     * @example PROJECT
     *
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'exclude' => 'Exclude',
        'key' => 'Key',
        'valueList' => 'ValueList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->valueList) {
            $res['ValueList'] = $this->valueList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ValueList'])) {
            if (!empty($map['ValueList'])) {
                $model->valueList = $map['ValueList'];
            }
        }

        return $model;
    }
}
