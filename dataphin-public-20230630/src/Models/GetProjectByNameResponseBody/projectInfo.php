<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectByNameResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectByNameResponseBody\projectInfo\whiteLists;
use AlibabaCloud\Tea\Model;

class projectInfo extends Model
{
    /**
     * @example 测试
     *
     * @var string
     */
    public $bizUnitDisplayName;

    /**
     * @example 101131
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @example 101711
     *
     * @var int
     */
    public $computeSourceId;

    /**
     * @example ds1
     *
     * @var string
     */
    public $computeSourceName;

    /**
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @example xx test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1030111021
     *
     * @var int
     */
    public $id;

    /**
     * @example BASIC
     *
     * @var string
     */
    public $mode;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example BASE
     *
     * @var string
     */
    public $nameSpaceTag;

    /**
     * @example 30012011
     *
     * @var string
     */
    public $owner;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 201711
     *
     * @var int
     */
    public $streamComputeSourceId;

    /**
     * @example ds2
     *
     * @var string
     */
    public $streamComputeSourceName;

    /**
     * @example GENERAL
     *
     * @var string
     */
    public $type;

    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'bizUnitDisplayName' => 'BizUnitDisplayName',
        'bizUnitId' => 'BizUnitId',
        'computeSourceId' => 'ComputeSourceId',
        'computeSourceName' => 'ComputeSourceName',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mode' => 'Mode',
        'name' => 'Name',
        'nameSpaceTag' => 'NameSpaceTag',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'streamComputeSourceId' => 'StreamComputeSourceId',
        'streamComputeSourceName' => 'StreamComputeSourceName',
        'type' => 'Type',
        'whiteLists' => 'WhiteLists',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitDisplayName) {
            $res['BizUnitDisplayName'] = $this->bizUnitDisplayName;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->computeSourceId) {
            $res['ComputeSourceId'] = $this->computeSourceId;
        }
        if (null !== $this->computeSourceName) {
            $res['ComputeSourceName'] = $this->computeSourceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameSpaceTag) {
            $res['NameSpaceTag'] = $this->nameSpaceTag;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->streamComputeSourceId) {
            $res['StreamComputeSourceId'] = $this->streamComputeSourceId;
        }
        if (null !== $this->streamComputeSourceName) {
            $res['StreamComputeSourceName'] = $this->streamComputeSourceName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whiteLists) {
            $res['WhiteLists'] = [];
            if (null !== $this->whiteLists && \is_array($this->whiteLists)) {
                $n = 0;
                foreach ($this->whiteLists as $item) {
                    $res['WhiteLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitDisplayName'])) {
            $model->bizUnitDisplayName = $map['BizUnitDisplayName'];
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['ComputeSourceId'])) {
            $model->computeSourceId = $map['ComputeSourceId'];
        }
        if (isset($map['ComputeSourceName'])) {
            $model->computeSourceName = $map['ComputeSourceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameSpaceTag'])) {
            $model->nameSpaceTag = $map['NameSpaceTag'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['StreamComputeSourceId'])) {
            $model->streamComputeSourceId = $map['StreamComputeSourceId'];
        }
        if (isset($map['StreamComputeSourceName'])) {
            $model->streamComputeSourceName = $map['StreamComputeSourceName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n = 0;
                foreach ($map['WhiteLists'] as $item) {
                    $model->whiteLists[$n++] = null !== $item ? whiteLists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
