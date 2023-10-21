<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;

use AlibabaCloud\Tea\Model;

class groupbys extends Model
{
    /**
     * @description The alias of the dimension based on which the data is grouped. Valid values of N: 1 to 10.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $alias;

    /**
     * @description The name of the field that is specified as the dimension. Valid values of N: 1 to 10.
     *
     * @example cpu
     *
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'alias'     => 'Alias',
        'fieldName' => 'FieldName',
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
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupbys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
