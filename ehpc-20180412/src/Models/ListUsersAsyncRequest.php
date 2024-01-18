<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListUsersAsyncRequest extends Model
{
    /**
     * @description The ID of the asynchronous task.
     *
     * @example t-hz02xltxaex1q80
     *
     * @var string
     */
    public $asyncId;

    /**
     * @description The ID of the E-HPC cluster. You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     *
     * @example ehpc-hz-vu7c2WkVGx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The page number.\
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.\
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'asyncId'    => 'AsyncId',
        'clusterId'  => 'ClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncId) {
            $res['AsyncId'] = $this->asyncId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersAsyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncId'])) {
            $model->asyncId = $map['AsyncId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
