<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class SkillAddMetaProfilingJobRequest extends Model
{
    /**
     * @var int
     */
    public $componentId;

    /**
     * @var string
     */
    public $jobDesc;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string[]
     */
    public $metaIds;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var int
     */
    public $profilingFlag;

    /**
     * @var int
     */
    public $profilingPermission;

    /**
     * @var string
     */
    public $profilingRule;

    /**
     * @var string[]
     */
    public $profilingSchemaList;

    /**
     * @var int
     */
    public $profilingType;
    protected $_name = [
        'componentId' => 'componentId',
        'jobDesc' => 'jobDesc',
        'jobId' => 'jobId',
        'jobName' => 'jobName',
        'metaIds' => 'metaIds',
        'pluginId' => 'pluginId',
        'profilingFlag' => 'profilingFlag',
        'profilingPermission' => 'profilingPermission',
        'profilingRule' => 'profilingRule',
        'profilingSchemaList' => 'profilingSchemaList',
        'profilingType' => 'profilingType',
    ];

    public function validate()
    {
        if (\is_array($this->metaIds)) {
            Model::validateArray($this->metaIds);
        }
        if (\is_array($this->profilingSchemaList)) {
            Model::validateArray($this->profilingSchemaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        if (null !== $this->jobDesc) {
            $res['jobDesc'] = $this->jobDesc;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->metaIds) {
            if (\is_array($this->metaIds)) {
                $res['metaIds'] = [];
                $n1 = 0;
                foreach ($this->metaIds as $item1) {
                    $res['metaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->profilingFlag) {
            $res['profilingFlag'] = $this->profilingFlag;
        }

        if (null !== $this->profilingPermission) {
            $res['profilingPermission'] = $this->profilingPermission;
        }

        if (null !== $this->profilingRule) {
            $res['profilingRule'] = $this->profilingRule;
        }

        if (null !== $this->profilingSchemaList) {
            if (\is_array($this->profilingSchemaList)) {
                $res['profilingSchemaList'] = [];
                $n1 = 0;
                foreach ($this->profilingSchemaList as $item1) {
                    $res['profilingSchemaList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->profilingType) {
            $res['profilingType'] = $this->profilingType;
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
        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        if (isset($map['jobDesc'])) {
            $model->jobDesc = $map['jobDesc'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['metaIds'])) {
            if (!empty($map['metaIds'])) {
                $model->metaIds = [];
                $n1 = 0;
                foreach ($map['metaIds'] as $item1) {
                    $model->metaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['profilingFlag'])) {
            $model->profilingFlag = $map['profilingFlag'];
        }

        if (isset($map['profilingPermission'])) {
            $model->profilingPermission = $map['profilingPermission'];
        }

        if (isset($map['profilingRule'])) {
            $model->profilingRule = $map['profilingRule'];
        }

        if (isset($map['profilingSchemaList'])) {
            if (!empty($map['profilingSchemaList'])) {
                $model->profilingSchemaList = [];
                $n1 = 0;
                foreach ($map['profilingSchemaList'] as $item1) {
                    $model->profilingSchemaList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['profilingType'])) {
            $model->profilingType = $map['profilingType'];
        }

        return $model;
    }
}
