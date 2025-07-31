<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetComputeSourceResponseBody;

use AlibabaCloud\Tea\Model;

class computeSourceInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $bindProject;

    /**
     * @example 10101101
     *
     * @var int
     */
    public $bindProjectId;

    /**
     * @example dp_mctest
     *
     * @var string
     */
    public $bindProjectName;

    /**
     * @example 101101
     *
     * @var string
     */
    public $creator;

    /**
     * @example test
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example compute source for xxx.
     *
     * @var string
     */
    public $description;

    /**
     * @example dp_test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1681881607000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1711881607000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 12356
     *
     * @var int
     */
    public $id;

    /**
     * @example dp_test
     *
     * @var string
     */
    public $name;

    /**
     * @example 101101
     *
     * @var string
     */
    public $owner;

    /**
     * @example test
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example MAX_COMPUTE
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
     * @return computeSourceInfo
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
