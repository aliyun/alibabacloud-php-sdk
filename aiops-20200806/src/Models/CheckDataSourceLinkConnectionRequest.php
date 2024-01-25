<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class CheckDataSourceLinkConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceParams;

    /**
     * @var int
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'dataSourceParams' => 'DataSourceParams',
        'dataSourceType'   => 'DataSourceType',
        'operaUid'         => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceParams) {
            $res['DataSourceParams'] = $this->dataSourceParams;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDataSourceLinkConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceParams'])) {
            $model->dataSourceParams = $map['DataSourceParams'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
