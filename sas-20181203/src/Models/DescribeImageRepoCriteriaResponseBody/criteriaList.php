<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The name of the search condition. Valid values:
     *
     *   **instanceId**: the ID of the image instance.
     *   **repoName**: the name of the image repository.
     *   **repoId**: the ID of the image repository.
     *   **repoNamespace**: the namespace of the image repository.
     *   **regionId**: the region in which the image resides.
     *   **vulStatus**: indicates whether vulnerabilities exist.
     *   **alarmStatus**: indicates whether security alerts exist.
     *   **hcStatus**: indicates whether baseline risks exist.
     *   **riskStatus**: indicates whether risks exist.
     *   **registryType**: the type of the image repository.
     *   **ImageId**: the image ID.
     *   **tag**: the image tag.
     *
     * @example vulStatus
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **input**: The search condition needs to be specified.
     *   **select**: The search condition is an option that can be selected from the drop-down list.
     *
     * @example select
     *
     * @var string
     */
    public $type;

    /**
     * @description The values of the search condition. This parameter is returned only if the value of **Type** is set to **select**.
     *
     * > If the value of **Type** is set to **input**, the return value of this parameter is empty.
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
