<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class UpdatePlaybookShrinkRequest extends Model
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
     * @var string
     */
    public $playbookInputConfigsShrink;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var string
     */
    public $playbookOutputConfigsShrink;

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
        'playbookInputConfigsShrink' => 'PlaybookInputConfigs',
        'playbookName' => 'PlaybookName',
        'playbookOutputConfigsShrink' => 'PlaybookOutputConfigs',
        'playbookParamType' => 'PlaybookParamType',
        'playbookTaskFlow' => 'PlaybookTaskFlow',
        'playbookUuid' => 'PlaybookUuid',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
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

        if (null !== $this->playbookInputConfigsShrink) {
            $res['PlaybookInputConfigs'] = $this->playbookInputConfigsShrink;
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }

        if (null !== $this->playbookOutputConfigsShrink) {
            $res['PlaybookOutputConfigs'] = $this->playbookOutputConfigsShrink;
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
            $model->playbookInputConfigsShrink = $map['PlaybookInputConfigs'];
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['PlaybookOutputConfigs'])) {
            $model->playbookOutputConfigsShrink = $map['PlaybookOutputConfigs'];
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
