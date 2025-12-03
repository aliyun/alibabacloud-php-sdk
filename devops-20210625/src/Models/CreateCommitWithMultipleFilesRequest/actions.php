<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitWithMultipleFilesRequest;

use AlibabaCloud\Dara\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $previousPath;
    protected $_name = [
        'action' => 'action',
        'content' => 'content',
        'filePath' => 'filePath',
        'previousPath' => 'previousPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
