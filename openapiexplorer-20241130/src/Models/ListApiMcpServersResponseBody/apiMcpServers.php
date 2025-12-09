<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\additionalApiDescriptions;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\apis;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\prompts;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\systemMcpServerInfo;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\terraformTools;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\urls;

class apiMcpServers extends Model
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
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAssumeRole;

    /**
     * @var bool
     */
    public $enableCustomVpcWhitelist;

    /**
     * @var string
     */
    public $id;

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
     * @var string
     */
    public $publicAccess;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var systemMcpServerInfo
     */
    public $systemMcpServerInfo;

    /**
     * @var string[]
     */
    public $systemTools;

    /**
     * @var terraformTools[]
     */
    public $terraformTools;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var urls
     */
    public $urls;

    /**
     * @var string[]
     */
    public $vpcWhitelists;
    protected $_name = [
        'additionalApiDescriptions' => 'additionalApiDescriptions',
        'apis' => 'apis',
        'assumeRoleExtraPolicy' => 'assumeRoleExtraPolicy',
        'assumeRoleName' => 'assumeRoleName',
        'createTime' => 'createTime',
        'description' => 'description',
        'enableAssumeRole' => 'enableAssumeRole',
        'enableCustomVpcWhitelist' => 'enableCustomVpcWhitelist',
        'id' => 'id',
        'instructions' => 'instructions',
        'language' => 'language',
        'name' => 'name',
        'oauthClientId' => 'oauthClientId',
        'prompts' => 'prompts',
        'publicAccess' => 'publicAccess',
        'sourceType' => 'sourceType',
        'systemMcpServerInfo' => 'systemMcpServerInfo',
        'systemTools' => 'systemTools',
        'terraformTools' => 'terraformTools',
        'updateTime' => 'updateTime',
        'urls' => 'urls',
        'vpcWhitelists' => 'vpcWhitelists',
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
        if (null !== $this->systemMcpServerInfo) {
            $this->systemMcpServerInfo->validate();
        }
        if (\is_array($this->systemTools)) {
            Model::validateArray($this->systemTools);
        }
        if (\is_array($this->terraformTools)) {
            Model::validateArray($this->terraformTools);
        }
        if (null !== $this->urls) {
            $this->urls->validate();
        }
        if (\is_array($this->vpcWhitelists)) {
            Model::validateArray($this->vpcWhitelists);
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

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enableAssumeRole) {
            $res['enableAssumeRole'] = $this->enableAssumeRole;
        }

        if (null !== $this->enableCustomVpcWhitelist) {
            $res['enableCustomVpcWhitelist'] = $this->enableCustomVpcWhitelist;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->publicAccess) {
            $res['publicAccess'] = $this->publicAccess;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->systemMcpServerInfo) {
            $res['systemMcpServerInfo'] = null !== $this->systemMcpServerInfo ? $this->systemMcpServerInfo->toArray($noStream) : $this->systemMcpServerInfo;
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

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->urls) {
            $res['urls'] = null !== $this->urls ? $this->urls->toArray($noStream) : $this->urls;
        }

        if (null !== $this->vpcWhitelists) {
            if (\is_array($this->vpcWhitelists)) {
                $res['vpcWhitelists'] = [];
                $n1 = 0;
                foreach ($this->vpcWhitelists as $item1) {
                    $res['vpcWhitelists'][$n1] = $item1;
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

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enableAssumeRole'])) {
            $model->enableAssumeRole = $map['enableAssumeRole'];
        }

        if (isset($map['enableCustomVpcWhitelist'])) {
            $model->enableCustomVpcWhitelist = $map['enableCustomVpcWhitelist'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['publicAccess'])) {
            $model->publicAccess = $map['publicAccess'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['systemMcpServerInfo'])) {
            $model->systemMcpServerInfo = systemMcpServerInfo::fromMap($map['systemMcpServerInfo']);
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

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['urls'])) {
            $model->urls = urls::fromMap($map['urls']);
        }

        if (isset($map['vpcWhitelists'])) {
            if (!empty($map['vpcWhitelists'])) {
                $model->vpcWhitelists = [];
                $n1 = 0;
                foreach ($map['vpcWhitelists'] as $item1) {
                    $model->vpcWhitelists[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
