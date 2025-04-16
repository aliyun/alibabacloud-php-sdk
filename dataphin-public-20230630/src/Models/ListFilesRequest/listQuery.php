<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $recursive;
    protected $_name = [
        'category' => 'Category',
        'directory' => 'Directory',
        'env' => 'Env',
        'projectId' => 'ProjectId',
        'recursive' => 'Recursive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->recursive) {
            $res['Recursive'] = $this->recursive;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Recursive'])) {
            $model->recursive = $map['Recursive'];
        }

        return $model;
    }
}
