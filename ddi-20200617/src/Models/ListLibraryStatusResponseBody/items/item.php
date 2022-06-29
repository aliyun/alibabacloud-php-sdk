<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibraryStatusResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $clusterName;

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
    public $status;
    protected $_name = [
        'clusterBizId' => 'ClusterBizId',
        'clusterName'  => 'ClusterName',
        'libraryBizId' => 'LibraryBizId',
        'libraryName'  => 'LibraryName',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->libraryName) {
            $res['LibraryName'] = $this->libraryName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['LibraryName'])) {
            $model->libraryName = $map['LibraryName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
