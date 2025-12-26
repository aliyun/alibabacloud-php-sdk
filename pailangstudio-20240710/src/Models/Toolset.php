<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class Toolset extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $tools;

    /**
     * @var string
     */
    public $toolsetConfig;

    /**
     * @var string
     */
    public $toolsetId;

    /**
     * @var string
     */
    public $toolsetName;

    /**
     * @var string
     */
    public $toolsetType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'creator' => 'Creator',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'tools' => 'Tools',
        'toolsetConfig' => 'ToolsetConfig',
        'toolsetId' => 'ToolsetId',
        'toolsetName' => 'ToolsetName',
        'toolsetType' => 'ToolsetType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->tools) {
            $res['Tools'] = $this->tools;
        }

        if (null !== $this->toolsetConfig) {
            $res['ToolsetConfig'] = $this->toolsetConfig;
        }

        if (null !== $this->toolsetId) {
            $res['ToolsetId'] = $this->toolsetId;
        }

        if (null !== $this->toolsetName) {
            $res['ToolsetName'] = $this->toolsetName;
        }

        if (null !== $this->toolsetType) {
            $res['ToolsetType'] = $this->toolsetType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Tools'])) {
            $model->tools = $map['Tools'];
        }

        if (isset($map['ToolsetConfig'])) {
            $model->toolsetConfig = $map['ToolsetConfig'];
        }

        if (isset($map['ToolsetId'])) {
            $model->toolsetId = $map['ToolsetId'];
        }

        if (isset($map['ToolsetName'])) {
            $model->toolsetName = $map['ToolsetName'];
        }

        if (isset($map['ToolsetType'])) {
            $model->toolsetType = $map['ToolsetType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
