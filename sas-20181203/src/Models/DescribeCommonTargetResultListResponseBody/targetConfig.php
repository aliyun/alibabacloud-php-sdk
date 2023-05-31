<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponseBody;

use AlibabaCloud\Tea\Model;

class targetConfig extends Model
{
    /**
     * @description The identifier that indicates whether the configuration item is applied to the server. Valid values:
     *
     *   **add**: applied
     *   **del**: not applied
     *
     * @example del
     *
     * @var string
     */
    public $flag;

    /**
     * @description The default identifier.
     *
     * @example add
     *
     * @var string
     */
    public $targetDefault;

    /**
     * @description An array that consists of the IDs of the server groups or the UUIDs of the servers.
     *
     * >  If **uuid** is returned for the **TargetType** parameter, **UUIDs** of the servers are returned. If **groupId** is returned for the **TargetType** parameter, IDs of the server groups are returned.
     * @var string[]
     */
    public $targetList;

    /**
     * @description The type of the server to which the configuration item is applied. Valid values:
     *
     *   **uuid**: a server
     *   **groupId**: a server group
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The total number of entries returned.
     *
     * @example 22
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The type of the configuration item. Valid values:
     *
     *   **webshell_timescan**: webshell detection and removal
     *   **aliscriptengine**: in-depth detection engine
     *   **alidetect**: installation scope of local file detection
     *   **alidetect-scan-enable**: detection scope of local file detection
     *
     * @example webshell_timescan
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'flag'          => 'Flag',
        'targetDefault' => 'TargetDefault',
        'targetList'    => 'TargetList',
        'targetType'    => 'TargetType',
        'totalCount'    => 'TotalCount',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->targetDefault) {
            $res['TargetDefault'] = $this->targetDefault;
        }
        if (null !== $this->targetList) {
            $res['TargetList'] = $this->targetList;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['TargetDefault'])) {
            $model->targetDefault = $map['TargetDefault'];
        }
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = $map['TargetList'];
            }
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
