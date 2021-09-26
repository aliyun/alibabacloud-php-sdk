<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibraryStatusResponseBody\items;

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
    public $clusterName;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $libraryName;
    protected $_name = [
        'status'       => 'Status',
        'clusterName'  => 'ClusterName',
        'clusterBizId' => 'ClusterBizId',
        'libraryBizId' => 'LibraryBizId',
        'libraryName'  => 'LibraryName',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->libraryName) {
            $res['LibraryName'] = $this->libraryName;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['LibraryName'])) {
            $model->libraryName = $map['LibraryName'];
        }

        return $model;
    }
}
