<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesResponseBody;

use AlibabaCloud\Dara\Model;

class registryModules extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloads;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int[]
     */
    public $sharedAccounts;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'acl' => 'acl',
        'createTime' => 'createTime',
        'description' => 'description',
        'downloads' => 'downloads',
        'moduleName' => 'moduleName',
        'namespaceName' => 'namespaceName',
        'provider' => 'provider',
        'sharedAccounts' => 'sharedAccounts',
        'source' => 'source',
        'sourceUrl' => 'sourceUrl',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->sharedAccounts)) {
            Model::validateArray($this->sharedAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloads) {
            $res['downloads'] = $this->downloads;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->sharedAccounts) {
            if (\is_array($this->sharedAccounts)) {
                $res['sharedAccounts'] = [];
                $n1 = 0;
                foreach ($this->sharedAccounts as $item1) {
                    $res['sharedAccounts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourceUrl) {
            $res['sourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloads'])) {
            $model->downloads = $map['downloads'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['sharedAccounts'])) {
            if (!empty($map['sharedAccounts'])) {
                $model->sharedAccounts = [];
                $n1 = 0;
                foreach ($map['sharedAccounts'] as $item1) {
                    $model->sharedAccounts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourceUrl'])) {
            $model->sourceUrl = $map['sourceUrl'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
