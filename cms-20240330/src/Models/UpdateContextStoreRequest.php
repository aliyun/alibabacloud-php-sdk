<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreRequest\config;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateContextStoreRequest\dataset;

class UpdateContextStoreRequest extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $contextType;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'config' => 'config',
        'contextType' => 'contextType',
        'dataset' => 'dataset',
        'description' => 'description',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->contextType) {
            $res['contextType'] = $this->contextType;
        }

        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['contextType'])) {
            $model->contextType = $map['contextType'];
        }

        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
