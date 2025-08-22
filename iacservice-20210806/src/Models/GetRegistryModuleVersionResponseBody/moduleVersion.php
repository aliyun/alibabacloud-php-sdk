<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleVersionResponseBody;

use AlibabaCloud\Dara\Model;

class moduleVersion extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $detailUrl;

    /**
     * @var string
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
    public $version;
    protected $_name = [
        'createTime' => 'createTime',
        'detailUrl' => 'detailUrl',
        'downloads' => 'downloads',
        'moduleName' => 'moduleName',
        'namespaceName' => 'namespaceName',
        'provider' => 'provider',
        'source' => 'source',
        'sourceUrl' => 'sourceUrl',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->detailUrl) {
            $res['detailUrl'] = $this->detailUrl;
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

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourceUrl) {
            $res['sourceUrl'] = $this->sourceUrl;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['detailUrl'])) {
            $model->detailUrl = $map['detailUrl'];
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

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourceUrl'])) {
            $model->sourceUrl = $map['sourceUrl'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
