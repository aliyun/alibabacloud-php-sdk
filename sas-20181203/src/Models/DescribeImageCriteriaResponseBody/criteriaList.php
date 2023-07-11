<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The name of the search condition.
     * - **tag**: the tag of the image
     * - **digest**: the digest of the image
     * - **vulStatus**: the status of the vulnerability
     * - **alarmStatus**: the status of the alert
     * - **riskStatus**: the status of the risk
     * - **registryType**: the type of the image repository
     * @example vulStatus
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the search condition. Valid values:
     * - **input**: The search condition needs to be specified.
     * - **select**: The search condition is an option that can be selected from the drop-down list.
     * @example input
     *
     * @var string
     */
    public $type;

    /**
     * @description The values of the search condition. This parameter is returned only if the value of Type is select.
     * > If the value of **Type** is **input**, the value of this parameter is an empty string.
     * @example NO,YES
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
