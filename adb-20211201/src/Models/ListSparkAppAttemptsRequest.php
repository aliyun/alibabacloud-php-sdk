<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListSparkAppAttemptsRequest extends Model
{
    /**
     * @description The ID of the Spark application.
     *
     * This parameter is required.
     * @example s202204132018hzprec1ac****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @example amv-uf6o6m8p6x***
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The page number. The value must be an integer that is greater than 0. Default value: **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **10** (default)
     *   **50**
     *   **100**
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId'       => 'AppId',
        'DBClusterId' => 'DBClusterId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
     * @return ListSparkAppAttemptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
