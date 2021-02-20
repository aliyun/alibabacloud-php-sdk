<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsNetDistrictRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $netLevelCode;

    /**
     * @var string
     */
    public $netDistrictCode;
    protected $_name = [
        'version'         => 'Version',
        'netLevelCode'    => 'NetLevelCode',
        'netDistrictCode' => 'NetDistrictCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->netLevelCode) {
            $res['NetLevelCode'] = $this->netLevelCode;
        }
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsNetDistrictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['NetLevelCode'])) {
            $model->netLevelCode = $map['NetLevelCode'];
        }
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }

        return $model;
    }
}
