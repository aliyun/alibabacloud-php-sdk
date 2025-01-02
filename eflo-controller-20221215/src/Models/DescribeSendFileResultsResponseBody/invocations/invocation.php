<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeSendFileResultsResponseBody\invocations\invocation\invokeNodes;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description Output information after command execution.
     *
     * If ContentEncoding is specified as Base64, the Base64 encoded output information is returned.
     * @example Base64
     *
     * @var string
     */
    public $content;

    /**
     * @description File content type.
     *
     * The default value is PlainText.
     * @example PlainText
     *
     * @var string
     */
    public $contentType;

    /**
     * @description Creation time of the distribution.
     *
     * @example 2023-04-10T10:53:46.156+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Command description.
     *
     * @example 描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description The user group of the file.
     *
     * @example root
     *
     * @var string
     */
    public $fileGroup;

    /**
     * @description File permissions.
     *
     * @example 0644
     *
     * @var string
     */
    public $fileMode;

    /**
     * @description The owner of the file.
     *
     * @example root
     *
     * @var string
     */
    public $fileOwner;

    /**
     * @description Overall status of the file distribution. The overall status depends on the common execution status of all instances involved in this distribution, possible values are:
     *
     * - PartialFailed: Some instances successfully received the file while others failed. If the file distribution status of all instances is either Success or Failed, the overall execution status will be PartialFailed.
     * @example Pending
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description Record of file distribution.
     *
     * @var invokeNodes
     */
    public $invokeNodes;

    /**
     * @description Name of the file distribution.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Number of nodes
     *
     * @example 3
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Whether to overwrite the file if a file with the same name already exists in the target directory.
     * The default value is false.
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description Target path.
     *
     * @example /home/user
     *
     * @var string
     */
    public $targetDir;
    protected $_name = [
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'fileGroup'        => 'FileGroup',
        'fileMode'         => 'FileMode',
        'fileOwner'        => 'FileOwner',
        'invocationStatus' => 'InvocationStatus',
        'invokeNodes'      => 'InvokeNodes',
        'name'             => 'Name',
        'nodeCount'        => 'NodeCount',
        'overwrite'        => 'Overwrite',
        'targetDir'        => 'TargetDir',
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
            $res['InvokeNodes'] = null !== $this->invokeNodes ? $this->invokeNodes->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return invocation
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
