<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class CreateCommandShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $toolDescription;

    /**
     * @var string
     */
    public $toolExamplesShrink;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var string
     */
    public $toolParamsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'domainCode' => 'DomainCode',
        'domainName' => 'DomainName',
        'toolDescription' => 'ToolDescription',
        'toolExamplesShrink' => 'ToolExamples',
        'toolName' => 'ToolName',
        'toolParamsShrink' => 'ToolParams',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->toolDescription) {
            $res['ToolDescription'] = $this->toolDescription;
        }

        if (null !== $this->toolExamplesShrink) {
            $res['ToolExamples'] = $this->toolExamplesShrink;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
        }

        if (null !== $this->toolParamsShrink) {
            $res['ToolParams'] = $this->toolParamsShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ToolDescription'])) {
            $model->toolDescription = $map['ToolDescription'];
        }

        if (isset($map['ToolExamples'])) {
            $model->toolExamplesShrink = $map['ToolExamples'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        if (isset($map['ToolParams'])) {
            $model->toolParamsShrink = $map['ToolParams'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
