<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class BuildIndexRequest extends Model
{
    /**
     * @var string
     */
    public $buildMode;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var int
     */
    public $dataTimeSec;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var string
     */
    public $partition;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'buildMode' => 'buildMode',
        'dataSourceName' => 'dataSourceName',
        'dataSourceType' => 'dataSourceType',
        'dataTimeSec' => 'dataTimeSec',
        'domain' => 'domain',
        'generation' => 'generation',
        'partition' => 'partition',
        'tag' => 'tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildMode) {
            $res['buildMode'] = $this->buildMode;
        }

        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['buildMode'])) {
            $model->buildMode = $map['buildMode'];
        }

        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }

        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
