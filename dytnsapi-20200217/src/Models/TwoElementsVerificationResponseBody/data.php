<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\TwoElementsVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The basic carriers. Valid values:
     *
     *   **China Mobile**
     *   **China Unicom**
     *   **China Telecom**
     *
     * >  You are not allowed to verify numbers assigned by China Broadnet.
     * @example China Mobile
     *
     * @var string
     */
    public $basicCarrier;

    /**
     * @description Indicates whether the specified name and phone number belong to the same user. Valid values:
     *
     * **1**: The specified name and phone number belong to the same user.
     *
     * **0**: The specified name and phone number do not belong to the same user.
     *
     * **2**: The specified name and phone number cannot be found.
     *
     * |China Telecom|Verifications can be carried out normally.|The specified name and phone number cannot be found.|The specified name and phone number cannot be found.|
     * @example 1
     *
     * @var int
     */
    public $isConsistent;
    protected $_name = [
        'basicCarrier' => 'BasicCarrier',
        'isConsistent' => 'IsConsistent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicCarrier) {
            $res['BasicCarrier'] = $this->basicCarrier;
        }
        if (null !== $this->isConsistent) {
            $res['IsConsistent'] = $this->isConsistent;
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
        if (isset($map['BasicCarrier'])) {
            $model->basicCarrier = $map['BasicCarrier'];
        }
        if (isset($map['IsConsistent'])) {
            $model->isConsistent = $map['IsConsistent'];
        }

        return $model;
    }
}
