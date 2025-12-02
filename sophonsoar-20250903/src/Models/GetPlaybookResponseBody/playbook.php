<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models\GetPlaybookResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\FieldInputConfig;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\FieldOutputConfig;

class playbook extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $playbookDescription;

    /**
     * @var string
     */
    public $playbookExtension;

    /**
     * @var FieldInputConfig[]
     */
    public $playbookInputConfigs;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var FieldOutputConfig[]
     */
    public $playbookOutputConfigs;

    /**
     * @var string
     */
    public $playbookParamType;

    /**
     * @var string
     */
    public $playbookParamsExample;

    /**
     * @var int
     */
    public $playbookStatus;

    /**
     * @var string
     */
    public $playbookTaskFlow;

    /**
     * @var string
     */
    public $playbookTaskFlowUuid;

    /**
     * @var string
     */
    public $playbookType;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $playbookVersion;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'playbookDescription' => 'PlaybookDescription',
        'playbookExtension' => 'PlaybookExtension',
        'playbookInputConfigs' => 'PlaybookInputConfigs',
        'playbookName' => 'PlaybookName',
        'playbookOutputConfigs' => 'PlaybookOutputConfigs',
        'playbookParamType' => 'PlaybookParamType',
        'playbookParamsExample' => 'PlaybookParamsExample',
        'playbookStatus' => 'PlaybookStatus',
        'playbookTaskFlow' => 'PlaybookTaskFlow',
        'playbookTaskFlowUuid' => 'PlaybookTaskFlowUuid',
        'playbookType' => 'PlaybookType',
        'playbookUuid' => 'PlaybookUuid',
        'playbookVersion' => 'PlaybookVersion',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->playbookInputConfigs)) {
            Model::validateArray($this->playbookInputConfigs);
        }
        if (\is_array($this->playbookOutputConfigs)) {
            Model::validateArray($this->playbookOutputConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->playbookDescription) {
            $res['PlaybookDescription'] = $this->playbookDescription;
        }

        if (null !== $this->playbookExtension) {
            $res['PlaybookExtension'] = $this->playbookExtension;
        }

        if (null !== $this->playbookInputConfigs) {
            if (\is_array($this->playbookInputConfigs)) {
                $res['PlaybookInputConfigs'] = [];
                $n1 = 0;
                foreach ($this->playbookInputConfigs as $item1) {
                    $res['PlaybookInputConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }

        if (null !== $this->playbookOutputConfigs) {
            if (\is_array($this->playbookOutputConfigs)) {
                $res['PlaybookOutputConfigs'] = [];
                $n1 = 0;
                foreach ($this->playbookOutputConfigs as $item1) {
                    $res['PlaybookOutputConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->playbookParamType) {
            $res['PlaybookParamType'] = $this->playbookParamType;
        }

        if (null !== $this->playbookParamsExample) {
            $res['PlaybookParamsExample'] = $this->playbookParamsExample;
        }

        if (null !== $this->playbookStatus) {
            $res['PlaybookStatus'] = $this->playbookStatus;
        }

        if (null !== $this->playbookTaskFlow) {
            $res['PlaybookTaskFlow'] = $this->playbookTaskFlow;
        }

        if (null !== $this->playbookTaskFlowUuid) {
            $res['PlaybookTaskFlowUuid'] = $this->playbookTaskFlowUuid;
        }

        if (null !== $this->playbookType) {
            $res['PlaybookType'] = $this->playbookType;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->playbookVersion) {
            $res['PlaybookVersion'] = $this->playbookVersion;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['PlaybookDescription'])) {
            $model->playbookDescription = $map['PlaybookDescription'];
        }

        if (isset($map['PlaybookExtension'])) {
            $model->playbookExtension = $map['PlaybookExtension'];
        }

        if (isset($map['PlaybookInputConfigs'])) {
            if (!empty($map['PlaybookInputConfigs'])) {
                $model->playbookInputConfigs = [];
                $n1 = 0;
                foreach ($map['PlaybookInputConfigs'] as $item1) {
                    $model->playbookInputConfigs[$n1] = FieldInputConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['PlaybookOutputConfigs'])) {
            if (!empty($map['PlaybookOutputConfigs'])) {
                $model->playbookOutputConfigs = [];
                $n1 = 0;
                foreach ($map['PlaybookOutputConfigs'] as $item1) {
                    $model->playbookOutputConfigs[$n1] = FieldOutputConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PlaybookParamType'])) {
            $model->playbookParamType = $map['PlaybookParamType'];
        }

        if (isset($map['PlaybookParamsExample'])) {
            $model->playbookParamsExample = $map['PlaybookParamsExample'];
        }

        if (isset($map['PlaybookStatus'])) {
            $model->playbookStatus = $map['PlaybookStatus'];
        }

        if (isset($map['PlaybookTaskFlow'])) {
            $model->playbookTaskFlow = $map['PlaybookTaskFlow'];
        }

        if (isset($map['PlaybookTaskFlowUuid'])) {
            $model->playbookTaskFlowUuid = $map['PlaybookTaskFlowUuid'];
        }

        if (isset($map['PlaybookType'])) {
            $model->playbookType = $map['PlaybookType'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['PlaybookVersion'])) {
            $model->playbookVersion = $map['PlaybookVersion'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
