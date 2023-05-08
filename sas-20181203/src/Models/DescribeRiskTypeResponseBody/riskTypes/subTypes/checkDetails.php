<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponseBody\riskTypes\subTypes\checkDetails\rules;
use AlibabaCloud\Tea\Model;

class checkDetails extends Model
{
    /**
     * @description The alias of the baseline subtype.
     *
     * @example Set password expiration time, force regular modification of password, reduce password leakage and guess risk.Use non-password login (e.g. key pair) please ignore this item.
     *
     * @var string
     */
    public $checkDesc;

    /**
     * @description The ID of the baseline.
     *
     * @example 1299
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The name of the baseline subtype.
     *
     * @example Ensure password expiration period is set.
     *
     * @var string
     */
    public $checkItem;

    /**
     * @description The minimum value of the parameter.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'checkDesc' => 'CheckDesc',
        'checkId'   => 'CheckId',
        'checkItem' => 'CheckItem',
        'rules'     => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDesc) {
            $res['CheckDesc'] = $this->checkDesc;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDesc'])) {
            $model->checkDesc = $map['CheckDesc'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
