<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeNodes;

class invocation extends Model
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
    public $creationTime;

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
    public $invocationStatus;

    /**
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $targetDir;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'fileGroup' => 'FileGroup',
        'fileMode' => 'FileMode',
        'fileOwner' => 'FileOwner',
        'invocationStatus' => 'InvocationStatus',
        'invokeNodes' => 'InvokeNodes',
        'name' => 'Name',
        'nodeCount' => 'NodeCount',
        'overwrite' => 'Overwrite',
        'targetDir' => 'TargetDir',
    ];

    public function validate()
    {
        if (null !== $this->invokeNodes) {
            $this->invokeNodes->validate();
        }
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

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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

        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }

        if (null !== $this->invokeNodes) {
            $res['InvokeNodes'] = null !== $this->invokeNodes ? $this->invokeNodes->toArray($noStream) : $this->invokeNodes;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
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

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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

        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }

        if (isset($map['InvokeNodes'])) {
            $model->invokeNodes = invokeNodes::fromMap($map['InvokeNodes']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }

        return $model;
    }
}
