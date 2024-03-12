<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class SendFileShrinkRequest extends Model
{
    /**
     * @example #!/bin/bash echo "Current User is :" echo $(ps | grep "$$" | awk \"{print $2}\") -------- oss://bucketName/objectName
     *
     * @var string
     */
    public $content;

    /**
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @example This is a test file.
     *
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @example root
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @example file.txt
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeIdListShrink;

    /**
     * @example True
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @example /home
     *
     * @var string
     */
    public $targetDir;

    /**
     * @example 600
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SendFileShrinkRequest
     */
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
