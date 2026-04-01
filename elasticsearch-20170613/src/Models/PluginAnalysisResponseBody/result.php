<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PluginAnalysisResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $elasticsearchVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityPolicy;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'elasticsearchVersion' => 'elasticsearchVersion',
        'name' => 'name',
        'securityPolicy' => 'securityPolicy',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->elasticsearchVersion) {
            $res['elasticsearchVersion'] = $this->elasticsearchVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->securityPolicy) {
            $res['securityPolicy'] = $this->securityPolicy;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['elasticsearchVersion'])) {
            $model->elasticsearchVersion = $map['elasticsearchVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['securityPolicy'])) {
            $model->securityPolicy = $map['securityPolicy'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
