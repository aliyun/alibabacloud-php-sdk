<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest\additionalApiDescriptions;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest\apis;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest\prompts;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest\terraformTools;

class CreateApiMcpServerRequest extends Model
{
    /**
     * @var additionalApiDescriptions[]
     */
    public $additionalApiDescriptions;

    /**
     * @var apis[]
     */
    public $apis;

    /**
     * @var string
     */
    public $assumeRoleExtraPolicy;

    /**
     * @var string
     */
    public $assumeRoleName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAssumeRole;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oauthClientId;

    /**
     * @var prompts[]
     */
    public $prompts;

    /**
     * @var string[]
     */
    public $systemTools;

    /**
     * @var terraformTools[]
     */
    public $terraformTools;
    protected $_name = [
        'additionalApiDescriptions' => 'additionalApiDescriptions',
        'apis' => 'apis',
        'assumeRoleExtraPolicy' => 'assumeRoleExtraPolicy',
        'assumeRoleName' => 'assumeRoleName',
        'clientToken' => 'clientToken',
        'description' => 'description',
        'enableAssumeRole' => 'enableAssumeRole',
        'instructions' => 'instructions',
        'language' => 'language',
        'name' => 'name',
        'oauthClientId' => 'oauthClientId',
        'prompts' => 'prompts',
        'systemTools' => 'systemTools',
        'terraformTools' => 'terraformTools',
    ];

    public function validate()
    {
        if (\is_array($this->additionalApiDescriptions)) {
            Model::validateArray($this->additionalApiDescriptions);
        }
        if (\is_array($this->apis)) {
            Model::validateArray($this->apis);
        }
        if (\is_array($this->prompts)) {
            Model::validateArray($this->prompts);
        }
        if (\is_array($this->systemTools)) {
            Model::validateArray($this->systemTools);
        }
        if (\is_array($this->terraformTools)) {
            Model::validateArray($this->terraformTools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalApiDescriptions) {
            if (\is_array($this->additionalApiDescriptions)) {
                $res['additionalApiDescriptions'] = [];
                $n1 = 0;
                foreach ($this->additionalApiDescriptions as $item1) {
                    $res['additionalApiDescriptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apis) {
            if (\is_array($this->apis)) {
                $res['apis'] = [];
                $n1 = 0;
                foreach ($this->apis as $item1) {
                    $res['apis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->assumeRoleExtraPolicy) {
            $res['assumeRoleExtraPolicy'] = $this->assumeRoleExtraPolicy;
        }

        if (null !== $this->assumeRoleName) {
            $res['assumeRoleName'] = $this->assumeRoleName;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enableAssumeRole) {
            $res['enableAssumeRole'] = $this->enableAssumeRole;
        }

        if (null !== $this->instructions) {
            $res['instructions'] = $this->instructions;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->oauthClientId) {
            $res['oauthClientId'] = $this->oauthClientId;
        }

        if (null !== $this->prompts) {
            if (\is_array($this->prompts)) {
                $res['prompts'] = [];
                $n1 = 0;
                foreach ($this->prompts as $item1) {
                    $res['prompts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemTools) {
            if (\is_array($this->systemTools)) {
                $res['systemTools'] = [];
                $n1 = 0;
                foreach ($this->systemTools as $item1) {
                    $res['systemTools'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terraformTools) {
            if (\is_array($this->terraformTools)) {
                $res['terraformTools'] = [];
                $n1 = 0;
                foreach ($this->terraformTools as $item1) {
                    $res['terraformTools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['additionalApiDescriptions'])) {
            if (!empty($map['additionalApiDescriptions'])) {
                $model->additionalApiDescriptions = [];
                $n1 = 0;
                foreach ($map['additionalApiDescriptions'] as $item1) {
                    $model->additionalApiDescriptions[$n1] = additionalApiDescriptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['apis'])) {
            if (!empty($map['apis'])) {
                $model->apis = [];
                $n1 = 0;
                foreach ($map['apis'] as $item1) {
                    $model->apis[$n1] = apis::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['assumeRoleExtraPolicy'])) {
            $model->assumeRoleExtraPolicy = $map['assumeRoleExtraPolicy'];
        }

        if (isset($map['assumeRoleName'])) {
            $model->assumeRoleName = $map['assumeRoleName'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enableAssumeRole'])) {
            $model->enableAssumeRole = $map['enableAssumeRole'];
        }

        if (isset($map['instructions'])) {
            $model->instructions = $map['instructions'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['oauthClientId'])) {
            $model->oauthClientId = $map['oauthClientId'];
        }

        if (isset($map['prompts'])) {
            if (!empty($map['prompts'])) {
                $model->prompts = [];
                $n1 = 0;
                foreach ($map['prompts'] as $item1) {
                    $model->prompts[$n1] = prompts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['systemTools'])) {
            if (!empty($map['systemTools'])) {
                $model->systemTools = [];
                $n1 = 0;
                foreach ($map['systemTools'] as $item1) {
                    $model->systemTools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['terraformTools'])) {
            if (!empty($map['terraformTools'])) {
                $model->terraformTools = [];
                $n1 = 0;
                foreach ($map['terraformTools'] as $item1) {
                    $model->terraformTools[$n1] = terraformTools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
