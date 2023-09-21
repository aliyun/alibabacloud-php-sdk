<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaResponseBody;

use AlibabaCloud\Tea\Model;

class criteriaList extends Model
{
    /**
     * @description The structured attribute values of the assets that match the keyword. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **vendor**: providers.
     *   **regionIds**: IDs of supported regions
     *
     * @example [{"vendor":0,"regionIds":{"default":["ap-southeast-1","ap-northeast-2","ap-southeast-3","ap-southeast-5","ap-southeast-7","me-central-1"]}},{"vendor":1,"regionIds":{"default":["outside-of-aliyun"]}}]
     *
     * @var string
     */
    public $multiValues;

    /**
     * @description The name of the search condition. Valid values:
     *
     *   **internetIp**: the public IP address.
     *   **intranetIp**: the private IP address.
     *   **instanceName**: the name of the instance.
     *   **instanceId**: the instance ID.
     *   **vpcInstanceId**: the ID of the virtual private cloud (VPC) to which the instance belongs.
     *   **osName**: the operating system.
     *   **osType**: the operating system type.
     *   **hcStatus**: indicates whether baseline risks exist.
     *   **vulStatus**: indicates whether vulnerabilities exist.
     *   **alarmStatus**: indicates whether security alerts exist.
     *   **riskStatus**: indicates whether risks exist.
     *   **clientStatus**: indicates the status of the client.
     *   **runningStatus**: the running status of the asset.
     *   **tagName**: the name of the tag.
     *   **groupName**: the name of the server group.
     *   **regionId**: the region ID.
     *   **importance**: the importance of the asset.
     *   **exposedStatus**: indicates whether the server is exposed.
     *   **authVersion**: the authorization version.
     *   **flag**: the cloud service provider.
     *   **ipList**: the IP addresses.
     *   **uuidList** :the UUID.
     *   **tagKeyValue**: the ECS tag.
     *
     * @example internetIp
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
     * @example input
     *
     * @var string
     */
    public $type;

    /**
     * @description The attribute values of the assets that match the keyword.
     *
     * @example 47.96.XX.XX
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
