<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The deployment ID of the data source.
     *
     * @example 277
     *
     * @var string
     */
    public $buildDeployId;

    /**
     * @description The index name.
     *
     * @example main_index
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The index version.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'indexName'     => 'indexName',
        'version'       => 'version',
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
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
