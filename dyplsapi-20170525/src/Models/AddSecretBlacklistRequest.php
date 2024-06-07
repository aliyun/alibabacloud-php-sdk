<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddSecretBlacklistRequest extends Model
{
    /**
     * @description The numbers in the blacklist. A point-to-point blacklist has a pair of numbers separated by a colon (:). A number pool blacklist has only one single number.
     *
     * >  The asterisks (\\*) in the sample value are not wildcards.
     *
     * This parameter is required.
     * @example 1825638****:1825248****
     *
     * @var string
     */
    public $blackNo;

    /**
     * @description The blacklist type. Valid values:
     *
     *   **POINT_TO_POINT_BLACK**: point-to-point blacklist.
     *   **PARTNER_GLOBAL_NUMBER_BLACK**: number pool blacklist.
     *
     * This parameter is required.
     * @example POINT_TO_POINT_BLACK
     *
     * @var string
     */
    public $blackType;

    /**
     * @description The key of the phone number pool.
     *
     * This parameter is required.
     * @example FC2235****
     *
     * @var string
     */
    public $poolKey;

    /**
     * @description The blacklist remarks.
     *
     * @example Customer service feedback
     *
     * @var string
     */
    public $remark;

    /**
     * @description The control on the call direction.
     *
     *   **PHONEA_REJECT**: The first number in the blacklist can be used to call the second number, but the second number cannot be used to call the first number.
     *   **PHONEB_REJECT**: The first number in the blacklist cannot be used to call the second number, but the second number can be used to call the first number.
     *   If this parameter is left empty, the two numbers in the blacklist cannot be used to call each other.
     *
     * Valid values:
     *
     *   DUPLEX_REJECT
     *   PHONEA_REJECT
     *   PHONEB_REJECT
     *
     * @example PHONEA_REJECT
     *
     * @var string
     */
    public $wayControl;
    protected $_name = [
        'blackNo'    => 'BlackNo',
        'blackType'  => 'BlackType',
        'poolKey'    => 'PoolKey',
        'remark'     => 'Remark',
        'wayControl' => 'WayControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackNo) {
            $res['BlackNo'] = $this->blackNo;
        }
        if (null !== $this->blackType) {
            $res['BlackType'] = $this->blackType;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->wayControl) {
            $res['WayControl'] = $this->wayControl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSecretBlacklistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackNo'])) {
            $model->blackNo = $map['BlackNo'];
        }
        if (isset($map['BlackType'])) {
            $model->blackType = $map['BlackType'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['WayControl'])) {
            $model->wayControl = $map['WayControl'];
        }

        return $model;
    }
}
