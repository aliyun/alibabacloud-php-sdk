<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ExportApplicationConfigsRequest extends Model
{
    /**
     * @var ApplicationConfigFile[]
     */
    public $applicationConfigFiles;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configScope;

    /**
     * @var string
     */
    public $exportMode;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string[]
     */
    public $nodeGroupIds;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigFiles' => 'ApplicationConfigFiles',
        'clusterId' => 'ClusterId',
        'configScope' => 'ConfigScope',
        'exportMode' => 'ExportMode',
        'fileFormat' => 'FileFormat',
        'nodeGroupIds' => 'NodeGroupIds',
        'nodeIds' => 'NodeIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigFiles)) {
            Model::validateArray($this->applicationConfigFiles);
        }
        if (\is_array($this->nodeGroupIds)) {
            Model::validateArray($this->nodeGroupIds);
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigFiles) {
            if (\is_array($this->applicationConfigFiles)) {
                $res['ApplicationConfigFiles'] = [];
                $n1 = 0;
                foreach ($this->applicationConfigFiles as $item1) {
                    $res['ApplicationConfigFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }

        if (null !== $this->exportMode) {
            $res['ExportMode'] = $this->exportMode;
        }

        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }

        if (null !== $this->nodeGroupIds) {
            if (\is_array($this->nodeGroupIds)) {
                $res['NodeGroupIds'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupIds as $item1) {
                    $res['NodeGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ApplicationConfigFiles'])) {
            if (!empty($map['ApplicationConfigFiles'])) {
                $model->applicationConfigFiles = [];
                $n1 = 0;
                foreach ($map['ApplicationConfigFiles'] as $item1) {
                    $model->applicationConfigFiles[$n1] = ApplicationConfigFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }

        if (isset($map['ExportMode'])) {
            $model->exportMode = $map['ExportMode'];
        }

        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }

        if (isset($map['NodeGroupIds'])) {
            if (!empty($map['NodeGroupIds'])) {
                $model->nodeGroupIds = [];
                $n1 = 0;
                foreach ($map['NodeGroupIds'] as $item1) {
                    $model->nodeGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
