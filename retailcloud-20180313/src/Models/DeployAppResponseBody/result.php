<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeployAppResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $admitted;

    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var int
     */
    public $deployOrderId;
    protected $_name = [
        'admitted'      => 'Admitted',
        'businessCode'  => 'BusinessCode',
        'deployOrderId' => 'DeployOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admitted) {
            $res['Admitted'] = $this->admitted;
        }
        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Admitted'])) {
            $model->admitted = $map['Admitted'];
        }
        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }

        return $model;
    }
}
