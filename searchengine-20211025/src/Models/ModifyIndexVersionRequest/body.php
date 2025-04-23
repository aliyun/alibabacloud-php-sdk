<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyIndexVersionRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $buildDeployId;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'indexName' => 'indexName',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
