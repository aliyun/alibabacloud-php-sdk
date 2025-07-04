<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody\result;

use AlibabaCloud\Dara\Model;

class indexVersions extends Model
{
    /**
     * @var string
     */
    public $buildDeployId;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var int[]
     */
    public $versions;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'currentVersion' => 'currentVersion',
        'indexName' => 'indexName',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }

        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = $item1;
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
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }

        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
