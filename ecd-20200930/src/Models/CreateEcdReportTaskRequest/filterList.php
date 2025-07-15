<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateEcdReportTaskRequest;

use AlibabaCloud\Tea\Model;

class filterList extends Model
{
    /**
     * @example Tag:TestKey
     *
     * @var string
     */
    public $filterKey;

    /**
     * @var string[]
     */
    public $filterValues;
    protected $_name = [
        'filterKey' => 'FilterKey',
        'filterValues' => 'FilterValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterValues) {
            $res['FilterValues'] = $this->filterValues;
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
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterValues'])) {
            if (!empty($map['FilterValues'])) {
                $model->filterValues = $map['FilterValues'];
            }
        }

        return $model;
    }
}
