<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAccountLabelResponseBody;

use AlibabaCloud\Dara\Model;

class accountLabelList extends Model
{
    /**
     * @var string
     */
    public $labelSeries;
    /**
     * @var bool
     */
    public $labelStatus;
    protected $_name = [
        'labelSeries' => 'LabelSeries',
        'labelStatus' => 'LabelStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
        }

        if (null !== $this->labelStatus) {
            $res['LabelStatus'] = $this->labelStatus;
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
        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }

        if (isset($map['LabelStatus'])) {
            $model->labelStatus = $map['LabelStatus'];
        }

        return $model;
    }
}
