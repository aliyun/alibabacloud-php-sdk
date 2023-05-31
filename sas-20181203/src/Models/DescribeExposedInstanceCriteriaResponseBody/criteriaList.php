<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The name of the search condition.
     *
     * @example instanceId
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **input**: You must configure the search condition.
     *   **select**: You must select a search condition from the **Values** list.
     *
     * @example select
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the search condition. This parameter is returned only when the value of the **Type** parameter is **select**.
     *
     * >  If the value of the **Type** parameter is **input**, this parameter is empty.
     * @example i-bp19r0fdd39idxhf****
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'type'   => 'Type',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return criteriaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
