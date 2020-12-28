<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSendFileResultsResponseBody\invocations\invokeInstances;
use AlibabaCloud\Tea\Model;

class invocations extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $invocationStatus;

    /**
     * @var string
     */
    public $targetDir;

    /**
     * @var invokeInstances[]
     */
    public $invokeInstances;

    /**
     * @var string
     */
    public $fileOwner;

    /**
     * @var int
     */
    public $vmCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileMode;

    /**
     * @var string
     */
    public $fileGroup;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $invokeId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $overwrite;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'contentType'      => 'ContentType',
        'invocationStatus' => 'InvocationStatus',
        'targetDir'        => 'TargetDir',
        'invokeInstances'  => 'InvokeInstances',
        'fileOwner'        => 'FileOwner',
        'vmCount'          => 'VmCount',
        'description'      => 'Description',
        'fileMode'         => 'FileMode',
        'fileGroup'        => 'FileGroup',
        'name'             => 'Name',
        'invokeId'         => 'InvokeId',
        'content'          => 'Content',
        'overwrite'        => 'Overwrite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->targetDir) {
            $res['TargetDir'] = $this->targetDir;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = [];
            if (null !== $this->invokeInstances && \is_array($this->invokeInstances)) {
                $n = 0;
                foreach ($this->invokeInstances as $item) {
                    $res['InvokeInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileOwner) {
            $res['FileOwner'] = $this->fileOwner;
        }
        if (null !== $this->vmCount) {
            $res['VmCount'] = $this->vmCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileMode) {
            $res['FileMode'] = $this->fileMode;
        }
        if (null !== $this->fileGroup) {
            $res['FileGroup'] = $this->fileGroup;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['TargetDir'])) {
            $model->targetDir = $map['TargetDir'];
        }
        if (isset($map['InvokeInstances'])) {
            if (!empty($map['InvokeInstances'])) {
                $model->invokeInstances = [];
                $n                      = 0;
                foreach ($map['InvokeInstances'] as $item) {
                    $model->invokeInstances[$n++] = null !== $item ? invokeInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileOwner'])) {
            $model->fileOwner = $map['FileOwner'];
        }
        if (isset($map['VmCount'])) {
            $model->vmCount = $map['VmCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileMode'])) {
            $model->fileMode = $map['FileMode'];
        }
        if (isset($map['FileGroup'])) {
            $model->fileGroup = $map['FileGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        return $model;
    }
}
