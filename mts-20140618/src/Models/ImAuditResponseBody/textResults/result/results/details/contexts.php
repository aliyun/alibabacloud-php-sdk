<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results\details;

use AlibabaCloud\Tea\Model;

class contexts extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $libCode;

    /**
     * @var string
     */
    public $libName;

    /**
     * @var string[]
     */
    public $positions;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'context'   => 'context',
        'libCode'   => 'libCode',
        'libName'   => 'libName',
        'positions' => 'positions',
        'ruleType'  => 'ruleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->libCode) {
            $res['libCode'] = $this->libCode;
        }
        if (null !== $this->libName) {
            $res['libName'] = $this->libName;
        }
        if (null !== $this->positions) {
            $res['positions'] = $this->positions;
        }
        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['context'])) {
            $model->context = $map['context'];
        }
        if (isset($map['libCode'])) {
            $model->libCode = $map['libCode'];
        }
        if (isset($map['libName'])) {
            $model->libName = $map['libName'];
        }
        if (isset($map['positions'])) {
            if (!empty($map['positions'])) {
                $model->positions = $map['positions'];
            }
        }
        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        return $model;
    }
}
