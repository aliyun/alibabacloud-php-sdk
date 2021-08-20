<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $lastActivityAt;

    /**
     * @var int
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $httpCloneUrl;

    /**
     * @var bool
     */
    public $archive;

    /**
     * @var string
     */
    public $sshCloneUrl;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $importStatus;

    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @var int
     */
    public $visibilityLevel;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'lastActivityAt'    => 'LastActivityAt',
        'namespaceId'       => 'NamespaceId',
        'httpCloneUrl'      => 'HttpCloneUrl',
        'archive'           => 'Archive',
        'sshCloneUrl'       => 'SshCloneUrl',
        'createdAt'         => 'CreatedAt',
        'creatorId'         => 'CreatorId',
        'importStatus'      => 'ImportStatus',
        'webUrl'            => 'WebUrl',
        'nameWithNamespace' => 'NameWithNamespace',
        'pathWithNamespace' => 'PathWithNamespace',
        'visibilityLevel'   => 'VisibilityLevel',
        'path'              => 'Path',
        'updatedAt'         => 'UpdatedAt',
        'name'              => 'Name',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastActivityAt) {
            $res['LastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->httpCloneUrl) {
            $res['HttpCloneUrl'] = $this->httpCloneUrl;
        }
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->sshCloneUrl) {
            $res['SshCloneUrl'] = $this->sshCloneUrl;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->importStatus) {
            $res['ImportStatus'] = $this->importStatus;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->nameWithNamespace) {
            $res['NameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->pathWithNamespace) {
            $res['PathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->visibilityLevel) {
            $res['VisibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['LastActivityAt'])) {
            $model->lastActivityAt = $map['LastActivityAt'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['HttpCloneUrl'])) {
            $model->httpCloneUrl = $map['HttpCloneUrl'];
        }
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['SshCloneUrl'])) {
            $model->sshCloneUrl = $map['SshCloneUrl'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['ImportStatus'])) {
            $model->importStatus = $map['ImportStatus'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['NameWithNamespace'])) {
            $model->nameWithNamespace = $map['NameWithNamespace'];
        }
        if (isset($map['PathWithNamespace'])) {
            $model->pathWithNamespace = $map['PathWithNamespace'];
        }
        if (isset($map['VisibilityLevel'])) {
            $model->visibilityLevel = $map['VisibilityLevel'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
