<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifySearchConditionRequest extends Model
{
    /**
     * @description The filter condition. The value of this parameter is in the JSON format and is case-sensitive. The value contains the following fields:
     *
     *   **filterParams**: the filter-related parameters. The value is in the JSON format. Valid values:
     *
     *   **label**: the display name of the filter condition in the console.
     *
     *   **value**: the settings of the filter condition. The value is in the JSON format. The value contains the following fields:
     *
     *   **name**: the name of the field for filtering. For more information, see the value description of name.
     *   **value**: the value of the field for filtering.
     *
     *   **LogicalExp**: the logical relationship among multiple filter conditions. Valid values:
     *
     *   **OR**
     *   **AND**
     *
     * >  Value description of **name**:
     *
     *   If **Type** is set to **ecs**, you can call the [DescribeCriteria](~~DescribeCriteria~~) operation to query the supported filter conditions.
     *
     *   If **Type** is set to **cloud_product**, you can call the [GetCloudAssetCriteria](~~GetCloudAssetCriteria~~) operation to query the supported filter conditions.
     *
     * @example {
     * "filterParams": [
     * {
     * "label": "UUID：xxx",
     * "value": "{\\"name\\":\\"uuidList\\",\\"value\\":\\"xxx\\"}"
     * }
     * ],
     * "LogicalExp": "OR"
     * }
     *
     * @var string
     */
    public $filterConditions;

    /**
     * @description The name of the common filter condition.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 27.223.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the asset. Default value: **ecs**. Valid values:
     *
     *   **ecs**: host
     *   **cloud_product**: Alibaba Cloud service
     *
     * @example ecs
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'filterConditions' => 'FilterConditions',
        'name' => 'Name',
        'sourceIp' => 'SourceIp',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterConditions) {
            $res['FilterConditions'] = $this->filterConditions;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySearchConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterConditions'])) {
            $model->filterConditions = $map['FilterConditions'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
