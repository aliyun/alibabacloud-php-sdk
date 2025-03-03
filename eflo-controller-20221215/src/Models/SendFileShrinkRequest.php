<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class SendFileShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $fileGroup;
    /**
     * @var string
     */
    public $fileMode;
    /**
     * @var string
     */
    public $fileOwner;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nodeIdListShrink;
    /**
     * @var bool
     */
    public $overwrite;
    /**
     * @var string
     */
    public $targetDir;
    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'description'      => 'Description',
        'fileGroup'        => 'FileGroup',
        'fileMode'         => 'FileMode',
        'fileOwner'        => 'FileOwner',
        'name'             => 'Name',
        'nodeIdListShrink' => 'NodeIdList',
        'overwrite'        => 'Overwrite',
        'targetDir'        => 'TargetDir',
        'timeout'          => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileGroup) {
            $res['FileGroup'] = $this->fileGroup;
        }

        if (null !== $this->fileMode) {
            $res['FileMode'] = $this->fileMode;
        }

        if (null !== $this->fileOwner) {
            $res['FileOwner'] = $this->fileOwner;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeIdListShrink) {
            $res['NodeIdList'] = $this->nodeIdListShrink;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileGroup'])) {
            $model->fileGroup = $map['FileGroup'];
        }

        if (isset($map['FileMode'])) {
            $model->fileMode = $map['FileMode'];
        }

        if (isset($map['FileOwner'])) {
            $model->fileOwner = $map['FileOwner'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeIdList'])) {
            $model->nodeIdListShrink = $map['NodeIdList'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
