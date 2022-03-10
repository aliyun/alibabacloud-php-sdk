<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var string
     */
    public $dsType;
    protected $_name = [
        'dsId'   => 'DsId',
        'dsName' => 'DsName',
        'dsType' => 'DsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }
        if (null !== $this->dsName) {
            $res['DsName'] = $this->dsName;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }
        if (isset($map['DsName'])) {
            $model->dsName = $map['DsName'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }

        return $model;
    }
}
