<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Folder extends Model
{
    /**
     * @var int
     */
    public $createdAt;
    /**
     * @var string
     */
    public $folderId;
    /**
     * @var int
     */
    public $modifiedAt;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $parentId;
    /**
     * @var SubFolder[]
     */
    public $subFolder;
    /**
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
        if (\is_array($this->subFolder)) {
            Model::validateArray($this->subFolder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->subFolder)) {
                $res['subFolder'] = [];
                $n1               = 0;
                foreach ($this->subFolder as $item1) {
                    $res['subFolder'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1               = 0;
                foreach ($map['subFolder'] as $item1) {
                    $model->subFolder[$n1++] = SubFolder::fromMap($item1);
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
