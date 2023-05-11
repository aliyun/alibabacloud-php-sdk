<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * @example 261b252d-c3c3-498a-a0a7-5d1ec6cd****
     *
     * @var string
     */
    public $dsId;

    /**
     * @description The time when the scaling group was modified.
     *
     * @example The name of the training dataset.
     *
     * @var string
     */
    public $dsName;

    /**
     * @description The user ID of the dataset owner in the Quick BI.
     *
     * @example mysql
     *
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
