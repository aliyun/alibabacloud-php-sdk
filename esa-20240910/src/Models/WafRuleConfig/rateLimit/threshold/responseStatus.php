<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\rateLimit\threshold;

use AlibabaCloud\Dara\Model;

class responseStatus extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $ratio;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'ratio' => 'Ratio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        return $model;
    }
}
