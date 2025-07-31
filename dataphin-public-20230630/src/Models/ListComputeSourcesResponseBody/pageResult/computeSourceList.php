<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class computeSourceList extends Model
{
    /**
     * @var bool
     */
    public $bindProject;

    /**
     * @example 10132131111
     *
     * @var int
     */
    public $bindProjectId;

    /**
     * @example testPrj
     *
     * @var string
     */
    public $bindProjectName;

    /**
     * @example 30012211
     *
     * @var string
     */
    public $creator;

    /**
     * @example 张三
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example test1011
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-06-30 08:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 102111
     *
     * @var int
     */
    public $id;

    /**
     * @example test1011
     *
     * @var string
     */
    public $name;

    /**
     * @example 30012211
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
     * @example MaxCompute
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindProject' => 'BindProject',
        'bindProjectId' => 'BindProjectId',
        'bindProjectName' => 'BindProjectName',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindProject) {
            $res['BindProject'] = $this->bindProject;
        }
        if (null !== $this->bindProjectId) {
            $res['BindProjectId'] = $this->bindProjectId;
        }
        if (null !== $this->bindProjectName) {
            $res['BindProjectName'] = $this->bindProjectName;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindProject'])) {
            $model->bindProject = $map['BindProject'];
        }
        if (isset($map['BindProjectId'])) {
            $model->bindProjectId = $map['BindProjectId'];
        }
        if (isset($map['BindProjectName'])) {
            $model->bindProjectName = $map['BindProjectName'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
