<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\dataSourceInfo;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListIndexesResponseBody\result\versions;

class result extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

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
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $fullUpdateTime;

    /**
     * @var int
     */
    public $fullVersion;

    /**
     * @var string
     */
    public $incUpdateTime;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var string
     */
    public $indexStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'content' => 'content',
        'createTime' => 'createTime',
        'dataSource' => 'dataSource',
        'dataSourceInfo' => 'dataSourceInfo',
        'description' => 'description',
        'domain' => 'domain',
        'fullUpdateTime' => 'fullUpdateTime',
        'fullVersion' => 'fullVersion',
        'incUpdateTime' => 'incUpdateTime',
        'indexSize' => 'indexSize',
        'indexStatus' => 'indexStatus',
        'name' => 'name',
        'partition' => 'partition',
        'updateTime' => 'updateTime',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dataSource) {
            $res['dataSource'] = $this->dataSource;
        }

        if (null !== $this->dataSourceInfo) {
            $res['dataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toArray($noStream) : $this->dataSourceInfo;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->fullUpdateTime) {
            $res['fullUpdateTime'] = $this->fullUpdateTime;
        }

        if (null !== $this->fullVersion) {
            $res['fullVersion'] = $this->fullVersion;
        }

        if (null !== $this->incUpdateTime) {
            $res['incUpdateTime'] = $this->incUpdateTime;
        }

        if (null !== $this->indexSize) {
            $res['indexSize'] = $this->indexSize;
        }

        if (null !== $this->indexStatus) {
            $res['indexStatus'] = $this->indexStatus;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dataSource'])) {
            $model->dataSource = $map['dataSource'];
        }

        if (isset($map['dataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['dataSourceInfo']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['fullUpdateTime'])) {
            $model->fullUpdateTime = $map['fullUpdateTime'];
        }

        if (isset($map['fullVersion'])) {
            $model->fullVersion = $map['fullVersion'];
        }

        if (isset($map['incUpdateTime'])) {
            $model->incUpdateTime = $map['incUpdateTime'];
        }

        if (isset($map['indexSize'])) {
            $model->indexSize = $map['indexSize'];
        }

        if (isset($map['indexStatus'])) {
            $model->indexStatus = $map['indexStatus'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
