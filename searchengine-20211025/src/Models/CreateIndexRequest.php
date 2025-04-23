<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateIndexRequest\dataSourceInfo;

class CreateIndexRequest extends Model
{
    /**
     * @var int
     */
    public $buildParallelNum;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var int
     */
    public $mergeParallelNum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'buildParallelNum' => 'buildParallelNum',
        'content' => 'content',
        'dataSource' => 'dataSource',
        'dataSourceInfo' => 'dataSourceInfo',
        'domain' => 'domain',
        'extend' => 'extend',
        'mergeParallelNum' => 'mergeParallelNum',
        'name' => 'name',
        'partition' => 'partition',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildParallelNum) {
            $res['buildParallelNum'] = $this->buildParallelNum;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }

        if (null !== $this->dataSourceInfo) {
            $res['dataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toArray($noStream) : $this->dataSourceInfo;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->extend) {
            if (\is_array($this->extend)) {
                $res['extend'] = [];
                foreach ($this->extend as $key1 => $value1) {
                    $res['extend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mergeParallelNum) {
            $res['mergeParallelNum'] = $this->mergeParallelNum;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['buildParallelNum'])) {
            $model->buildParallelNum = $map['buildParallelNum'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }

        if (isset($map['dataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['dataSourceInfo']);
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['extend'])) {
            if (!empty($map['extend'])) {
                $model->extend = [];
                foreach ($map['extend'] as $key1 => $value1) {
                    $model->extend[$key1] = $value1;
                }
            }
        }

        if (isset($map['mergeParallelNum'])) {
            $model->mergeParallelNum = $map['mergeParallelNum'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
