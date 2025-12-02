<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class UpdatePlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playbookDescription;

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
    public $playbookTaskFlow;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'lang' => 'Lang',
        'playbookDescription' => 'PlaybookDescription',
        'playbookInputConfigs' => 'PlaybookInputConfigs',
        'playbookName' => 'PlaybookName',
        'playbookOutputConfigs' => 'PlaybookOutputConfigs',
        'playbookParamType' => 'PlaybookParamType',
        'playbookTaskFlow' => 'PlaybookTaskFlow',
        'playbookUuid' => 'PlaybookUuid',
        'roleFor' => 'RoleFor',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->playbookDescription) {
            $res['PlaybookDescription'] = $this->playbookDescription;
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

        if (null !== $this->playbookTaskFlow) {
            $res['PlaybookTaskFlow'] = $this->playbookTaskFlow;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PlaybookDescription'])) {
            $model->playbookDescription = $map['PlaybookDescription'];
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

        if (isset($map['PlaybookTaskFlow'])) {
            $model->playbookTaskFlow = $map['PlaybookTaskFlow'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
