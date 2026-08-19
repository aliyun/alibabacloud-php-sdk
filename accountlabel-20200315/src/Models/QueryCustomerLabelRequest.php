<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models;

use AlibabaCloud\Dara\Model;

class QueryCustomerLabelRequest extends Model
{
    /**
     * @var bool
     */
    public $instant;

    /**
     * @var string
     */
    public $labelSeries;

    /**
     * @var int
     */
    public $PK;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'instant' => 'Instant',
        'labelSeries' => 'LabelSeries',
        'PK' => 'PK',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instant) {
            $res['Instant'] = $this->instant;
        }

        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Instant'])) {
            $model->instant = $map['Instant'];
        }

        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
