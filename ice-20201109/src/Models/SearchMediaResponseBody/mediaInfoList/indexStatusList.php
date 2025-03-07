<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Tea\Model;

class indexStatusList extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $indexStatus;

    /**
     * @example mm
     *
     * @var string
     */
    public $indexType;
    protected $_name = [
        'indexStatus' => 'IndexStatus',
        'indexType'   => 'IndexType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        return $model;
    }
}
