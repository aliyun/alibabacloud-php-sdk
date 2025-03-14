<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIdcAssetCriteriaRequest extends Model
{
    /**
     * @description The status of the IP address. Valid values:
     *
     *   **0**: The IP address is valid.
     *   **1**: The IP address is ignored.
     *   *2*: The IP address is invalid.
     *   *3*: The IP address is expired.
     *   *4*: The probe that is used to scan the IP address does not exist.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The keyword that is used to match assets in fuzzy mode.
     *
     * @example testwww
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'status' => 'Status',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIdcAssetCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
