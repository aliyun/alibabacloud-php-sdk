<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody\groupSummarys;

use AlibabaCloud\Tea\Model;

class groupPluginSummary extends Model
{
    /**
     * @description API root path
     *
     * @example /rpew
     *
     * @var string
     */
    public $basePath;

    /**
     * @description Description
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description API group ID
     *
     * @example 4ed31575e2de43de8c51eb1217a1f56b
     *
     * @var string
     */
    public $groupId;

    /**
     * @description API group name
     *
     * @example ECP_API
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Region ID where the API group is located
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Stage name Alias
     *
     * @example DEV
     *
     * @var string
     */
    public $stageAlias;

    /**
     * @description Environment name, possible values:
     *
     * - **RELEASE**: Production
     * - **PRE**: Pre-release
     * - **TEST**: Testing
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'basePath' => 'BasePath',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'regionId' => 'RegionId',
        'stageAlias' => 'StageAlias',
        'stageName' => 'StageName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageAlias) {
            $res['StageAlias'] = $this->stageAlias;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupPluginSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageAlias'])) {
            $model->stageAlias = $map['StageAlias'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
