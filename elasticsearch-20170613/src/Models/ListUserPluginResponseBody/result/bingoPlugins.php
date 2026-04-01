<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListUserPluginResponseBody\result;

use AlibabaCloud\Dara\Model;

class bingoPlugins extends Model
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
    public $fileVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'elasticsearchVersion' => 'elasticsearchVersion',
        'fileVersion' => 'fileVersion',
        'name' => 'name',
        'source' => 'source',
        'state' => 'state',
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

        if (null !== $this->fileVersion) {
            $res['fileVersion'] = $this->fileVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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

        if (isset($map['fileVersion'])) {
            $model->fileVersion = $map['fileVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
