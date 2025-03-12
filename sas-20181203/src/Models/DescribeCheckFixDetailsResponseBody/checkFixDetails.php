<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails\rules;
use AlibabaCloud\Tea\Model;

class checkFixDetails extends Model
{
    /**
     * @description The detailed description of the risk item.
     *
     * @example Force users not to reuse recently used passwords to reduce the risk of password guessing attacks
     *
     * @var string
     */
    public $checkDesc;

    /**
     * @description The ID of the risk item.
     *
     * @example 58
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The description of the risk item.
     *
     * @example Ensure password reuse is limited
     *
     * @var string
     */
    public $checkItem;

    /**
     * @description An array consisting of the rules that are supported by the risk item.
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
     * @return checkFixDetails
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
