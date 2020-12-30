<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryStatusResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $libraryName;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterBizId;
    protected $_name = [
        'status'       => 'Status',
        'libraryBizId' => 'LibraryBizId',
        'libraryName'  => 'LibraryName',
        'clusterName'  => 'ClusterName',
        'clusterBizId' => 'ClusterBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->libraryName) {
            $res['LibraryName'] = $this->libraryName;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['LibraryName'])) {
            $model->libraryName = $map['LibraryName'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }

        return $model;
    }
}
