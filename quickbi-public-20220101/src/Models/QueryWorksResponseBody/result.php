<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody\result\directory;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 第三方嵌入状态
     *
     * @var int
     */
    public $auth3rdFlag;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 所属空间目录信息
     *
     * @var directory
     */
    public $directory;

    /**
     * @description 创建时间d
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description 修改显示名称
     *
     * @var string
     */
    public $modifyName;

    /**
     * @description 所有者Id
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description 所有者显示名称
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description 安全策略：0 私有 1 协同编辑。 （
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description 报表发布状态 @PublishStatusEnum
     *
     * @var int
     */
    public $status;

    /**
     * @description 作品名称
     *
     * @var string
     */
    public $workName;

    /**
     * @description 作品类型
     *
     * @var string
     */
    public $workType;

    /**
     * @description 作品ID
     *
     * @var string
     */
    public $worksId;

    /**
     * @description 所属工作空间
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description 所属空间名称
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'auth3rdFlag'   => 'Auth3rdFlag',
        'description'   => 'Description',
        'directory'     => 'Directory',
        'gmtCreate'     => 'GmtCreate',
        'gmtModify'     => 'GmtModify',
        'modifyName'    => 'ModifyName',
        'ownerId'       => 'OwnerId',
        'ownerName'     => 'OwnerName',
        'securityLevel' => 'SecurityLevel',
        'status'        => 'Status',
        'workName'      => 'WorkName',
        'workType'      => 'WorkType',
        'worksId'       => 'WorksId',
        'workspaceId'   => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth3rdFlag) {
            $res['Auth3rdFlag'] = $this->auth3rdFlag;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->modifyName) {
            $res['ModifyName'] = $this->modifyName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workName) {
            $res['WorkName'] = $this->workName;
        }
        if (null !== $this->workType) {
            $res['WorkType'] = $this->workType;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auth3rdFlag'])) {
            $model->auth3rdFlag = $map['Auth3rdFlag'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['ModifyName'])) {
            $model->modifyName = $map['ModifyName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkName'])) {
            $model->workName = $map['WorkName'];
        }
        if (isset($map['WorkType'])) {
            $model->workType = $map['WorkType'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
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
