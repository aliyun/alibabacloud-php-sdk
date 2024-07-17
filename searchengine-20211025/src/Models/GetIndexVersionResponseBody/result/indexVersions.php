<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexVersionResponseBody\result;

use AlibabaCloud\Tea\Model;

class indexVersions extends Model
{
    /**
     * @description The ID of the offline deployment.
     *
     * @example " "
     *
     * @var string
     */
    public $buildDeployId;

    /**
     * @description The current online version number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description The name of the index table.
     *
     * @example table4
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The index versions.
     *
     * @var int[]
     */
    public $versions;
    protected $_name = [
        'buildDeployId'  => 'buildDeployId',
        'currentVersion' => 'currentVersion',
        'indexName'      => 'indexName',
        'versions'       => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexVersions
     */
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
                $model->versions = $map['versions'];
            }
        }

        return $model;
    }
}
