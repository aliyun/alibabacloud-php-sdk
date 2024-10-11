<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListFilesRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tempCode
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example /xx/x
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 11112311
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $recursive;
    protected $_name = [
        'category'  => 'Category',
        'directory' => 'Directory',
        'env'       => 'Env',
        'projectId' => 'ProjectId',
        'recursive' => 'Recursive',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return listQuery
     */
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
