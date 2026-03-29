<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reportsOfChangeRateData extends Model
{
    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $flag;

    /**
     * @var string
     */
    public $changeCount;

    /**
     * @var string
     */
    public $changeRate;
    protected $_name = [
        'ds' => 'Ds',
        'flag' => 'Flag',
        'changeCount' => 'ChangeCount',
        'changeRate' => 'ChangeRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }

        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        if (null !== $this->changeCount) {
            $res['ChangeCount'] = $this->changeCount;
        }

        if (null !== $this->changeRate) {
            $res['ChangeRate'] = $this->changeRate;
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
        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }

        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }

        if (isset($map['ChangeCount'])) {
            $model->changeCount = $map['ChangeCount'];
        }

        if (isset($map['ChangeRate'])) {
            $model->changeRate = $map['ChangeRate'];
        }

        return $model;
    }
}
