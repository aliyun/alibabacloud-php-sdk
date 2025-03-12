<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The structured attribute values of the assets that match the keyword. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **vendor**: providers
     *   **regionIds**: IDs of supported regions
     *
     * @example [{"vendor":0,"regionIds":{"default":["ap-southeast-1","ap-northeast-2","ap-southeast-3","ap-southeast-5","ap-southeast-7","me-central-1"]}},{"vendor":1,"regionIds":{"default":["outside-of-aliyun"]}}]
     *
     * @var string
     */
    public $multiValues;

    /**
     * @description The name of the filter condition. Valid values:
     *
     *   **instanceId**: the ID of the instance
     *   **instanceName**: the name of an instance
     *   **internetIp**: the public IP address
     *   **riskStatus**: the risk status
     *   **vendorRegionId**: the region ID by service provider
     *
     * @example instanceId
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the filter condition. Valid values:
     *
     *   **input**: The filter condition needs to be specified.
     *   **select**: The filter condition is an option that can be selected from the drop-down list.
     *
     * @example select
     *
     * @var string
     */
    public $type;

    /**
     * @description The values of the search condition. This parameter is returned only if the value of **Type** is **select**.
     *
     * >  If the value of **Type** is **input**, the value of this parameter is an empty string.
     * @example fvt*
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'multiValues' => 'MultiValues',
        'name'        => 'Name',
        'type'        => 'Type',
        'values'      => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiValues) {
            $res['MultiValues'] = $this->multiValues;
        }
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
        if (isset($map['MultiValues'])) {
            $model->multiValues = $map['MultiValues'];
        }
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
