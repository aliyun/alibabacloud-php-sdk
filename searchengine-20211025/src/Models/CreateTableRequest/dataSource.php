<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateTableRequest\dataSource\config;

class dataSource extends Model
{
    /**
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @var config
     */
    public $config;

    /**
     * @var int
     */
    public $dataTimeSec;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'config' => 'config',
        'dataTimeSec' => 'dataTimeSec',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }

        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['autoBuildIndex'])) {
            $model->autoBuildIndex = $map['autoBuildIndex'];
        }

        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
