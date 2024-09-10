<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAccountLabelResponseBody;

use AlibabaCloud\Tea\Model;

class accountLabelList extends Model
{
    /**
     * @example SasStep
     *
     * @var string
     */
    public $labelSeries;

    /**
     * @example true
     *
     * @var bool
     */
    public $labelStatus;
    protected $_name = [
        'labelSeries' => 'LabelSeries',
        'labelStatus' => 'LabelStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accountLabelList
     */
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
