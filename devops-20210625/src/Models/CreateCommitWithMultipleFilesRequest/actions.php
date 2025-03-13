<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitWithMultipleFilesRequest;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @example create
     *
     * @var string
     */
    public $action;

    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @example src/test.java
     *
     * @var string
     */
    public $filePath;

    /**
     * @example src/main/test.java
     *
     * @var string
     */
    public $previousPath;
    protected $_name = [
        'action'       => 'action',
        'content'      => 'content',
        'filePath'     => 'filePath',
        'previousPath' => 'previousPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }
        if (null !== $this->previousPath) {
            $res['previousPath'] = $this->previousPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }
        if (isset($map['previousPath'])) {
            $model->previousPath = $map['previousPath'];
        }

        return $model;
    }
}
