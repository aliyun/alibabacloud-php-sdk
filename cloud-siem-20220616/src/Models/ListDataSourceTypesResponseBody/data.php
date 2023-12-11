<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example hcloud
     *
     * @var string
     */
    public $cloudCode;

    /**
     * @example obs
     *
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'cloudCode'      => 'CloudCode',
        'dataSourceType' => 'DataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
