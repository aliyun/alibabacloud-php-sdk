<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The model of the data service in JSON format.
     *
     * @var content
     */
    public $content;

    /**
     * @description Creator ID.
     *
     * @example 7cb94cd48701
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description Creator\\"s name.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description Cube identifier ID.
     *
     * @example d14e7448-0eb3-40d3-9375-4afef8de29fd
     *
     * @var string
     */
    public $cubeId;

    /**
     * @description Dataset name.
     *
     * @example test data source
     *
     * @var string
     */
    public $cubeName;

    /**
     * @description Description
     *
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description Creation time.
     *
     * @example 2023-05-18 14:00:02.0
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Modification time.
     *
     * @example 2023-03-21 18:02:36
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Modifier\\"s userId.
     *
     * @example 7cb94cd48701
     *
     * @var string
     */
    public $modifierId;

    /**
     * @description Modifier\\"s name
     *
     * @example zhangsan
     *
     * @var string
     */
    public $modifierName;

    /**
     * @description Data service name.
     *
     * @example test report
     *
     * @var string
     */
    public $name;

    /**
     * @description Owner ID
     *
     * @example 862801339
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Owner\\"s name
     *
     * @example lisi
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description Unique ID of the data service.
     *
     * @example dtsuq3i31f5j8v848b
     *
     * @var string
     */
    public $sid;

    /**
     * @description Workspace ID.
     *
     * @example 7350a155-0e94-4c6c-8620-57bbec38****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description Workspace name.
     *
     * @example test workspace
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'content' => 'Content',
        'creatorId' => 'CreatorId',
        'creatorName' => 'CreatorName',
        'cubeId' => 'CubeId',
        'cubeName' => 'CubeName',
        'desc' => 'Desc',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modifierId' => 'ModifierId',
        'modifierName' => 'ModifierName',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'sid' => 'Sid',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->cubeName) {
            $res['CubeName'] = $this->cubeName;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->modifierName) {
            $res['ModifierName'] = $this->modifierName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['CubeName'])) {
            $model->cubeName = $map['CubeName'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['ModifierName'])) {
            $model->modifierName = $map['ModifierName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
