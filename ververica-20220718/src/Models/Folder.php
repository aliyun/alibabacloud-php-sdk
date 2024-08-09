<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Folder extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @example 00000000-0000-0000-0000-0000012312****
     *
     * @var string
     */
    public $folderId;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 00000000-0000-0000-0000-0000012390****
     *
     * @var string
     */
    public $parentId;

    /**
     * @var SubFolder[]
     */
    public $subFolder;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createdAt'  => 'createdAt',
        'folderId'   => 'folderId',
        'modifiedAt' => 'modifiedAt',
        'name'       => 'name',
        'namespace'  => 'namespace',
        'parentId'   => 'parentId',
        'subFolder'  => 'subFolder',
        'workspace'  => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }
        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->subFolder) {
            $res['subFolder'] = [];
            if (null !== $this->subFolder && \is_array($this->subFolder)) {
                $n = 0;
                foreach ($this->subFolder as $item) {
                    $res['subFolder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Folder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }
        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['subFolder'])) {
            if (!empty($map['subFolder'])) {
                $model->subFolder = [];
                $n                = 0;
                foreach ($map['subFolder'] as $item) {
                    $model->subFolder[$n++] = null !== $item ? SubFolder::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
