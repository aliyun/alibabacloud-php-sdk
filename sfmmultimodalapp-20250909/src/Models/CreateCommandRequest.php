<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandRequest\toolExamples;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandRequest\toolParams;

class CreateCommandRequest extends Model
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
     * @var toolExamples[]
     */
    public $toolExamples;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var toolParams[]
     */
    public $toolParams;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'domainCode' => 'DomainCode',
        'domainName' => 'DomainName',
        'toolDescription' => 'ToolDescription',
        'toolExamples' => 'ToolExamples',
        'toolName' => 'ToolName',
        'toolParams' => 'ToolParams',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->toolExamples)) {
            Model::validateArray($this->toolExamples);
        }
        if (\is_array($this->toolParams)) {
            Model::validateArray($this->toolParams);
        }
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

        if (null !== $this->toolExamples) {
            if (\is_array($this->toolExamples)) {
                $res['ToolExamples'] = [];
                $n1 = 0;
                foreach ($this->toolExamples as $item1) {
                    $res['ToolExamples'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
        }

        if (null !== $this->toolParams) {
            if (\is_array($this->toolParams)) {
                $res['ToolParams'] = [];
                $n1 = 0;
                foreach ($this->toolParams as $item1) {
                    $res['ToolParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ToolExamples'])) {
                $model->toolExamples = [];
                $n1 = 0;
                foreach ($map['ToolExamples'] as $item1) {
                    $model->toolExamples[$n1] = toolExamples::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        if (isset($map['ToolParams'])) {
            if (!empty($map['ToolParams'])) {
                $model->toolParams = [];
                $n1 = 0;
                foreach ($map['ToolParams'] as $item1) {
                    $model->toolParams[$n1] = toolParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
