<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\ListFederationsResponseBody;

use AlibabaCloud\Tea\Model;

class federations extends Model
{
    /**
     * @var string
     */
    public $federationId;

    /**
     * @var string
     */
    public $fileSystemIds;
    protected $_name = [
        'federationId' => 'FederationId',
        'fileSystemIds' => 'FileSystemIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->federationId) {
            $res['FederationId'] = $this->federationId;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return federations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FederationId'])) {
            $model->federationId = $map['FederationId'];
        }
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
        }

        return $model;
    }
}
