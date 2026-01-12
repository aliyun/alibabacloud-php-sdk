<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdResponseBody\data\source\sourceFiles;

class source extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var sourceFiles[]
     */
    public $sourceFiles;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'ossKey' => 'OssKey',
        'projectId' => 'ProjectId',
        'sourceFiles' => 'SourceFiles',
    ];

    public function validate()
    {
        if (\is_array($this->sourceFiles)) {
            Model::validateArray($this->sourceFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->sourceFiles) {
            if (\is_array($this->sourceFiles)) {
                $res['SourceFiles'] = [];
                $n1 = 0;
                foreach ($this->sourceFiles as $item1) {
                    $res['SourceFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SourceFiles'])) {
            if (!empty($map['SourceFiles'])) {
                $model->sourceFiles = [];
                $n1 = 0;
                foreach ($map['SourceFiles'] as $item1) {
                    $model->sourceFiles[$n1] = sourceFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
