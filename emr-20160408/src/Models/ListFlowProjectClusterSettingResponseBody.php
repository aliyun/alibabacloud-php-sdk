<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings;
use AlibabaCloud\Tea\Model;

class ListFlowProjectClusterSettingResponseBody extends Model
{
    /**
     * @var clusterSettings
     */
    public $clusterSettings;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'clusterSettings' => 'ClusterSettings',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSettings) {
            $res['ClusterSettings'] = null !== $this->clusterSettings ? $this->clusterSettings->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowProjectClusterSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSettings'])) {
            $model->clusterSettings = clusterSettings::fromMap($map['ClusterSettings']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
