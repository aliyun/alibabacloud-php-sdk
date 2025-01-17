<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateSearchIndexRequest extends Model
{
    /**
     * @var string
     */
    public $indexConfig;
    /**
     * @var string
     */
    public $indexStatus;
    /**
     * @var string
     */
    public $indexType;
    /**
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'indexConfig'   => 'IndexConfig',
        'indexStatus'   => 'IndexStatus',
        'indexType'     => 'IndexType',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexConfig) {
            $res['IndexConfig'] = $this->indexConfig;
        }

        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }

        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }

        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
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
        if (isset($map['IndexConfig'])) {
            $model->indexConfig = $map['IndexConfig'];
        }

        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }

        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
