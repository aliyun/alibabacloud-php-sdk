<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListCommandResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListCommandResponseBody\toolInfoList\toolExamples;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListCommandResponseBody\toolInfoList\toolParams;

class toolInfoList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $description;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var toolExamples[]
     */
    public $toolExamples;

    /**
     * @var string
     */
    public $toolId;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var toolParams[]
     */
    public $toolParams;
    protected $_name = [
        'appId' => 'AppId',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'description' => 'Description',
        'domainCode' => 'DomainCode',
        'domainName' => 'DomainName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'toolExamples' => 'ToolExamples',
        'toolId' => 'ToolId',
        'toolName' => 'ToolName',
        'toolParams' => 'ToolParams',
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

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
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

        if (null !== $this->toolId) {
            $res['ToolId'] = $this->toolId;
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

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
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

        if (isset($map['ToolId'])) {
            $model->toolId = $map['ToolId'];
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

        return $model;
    }
}
