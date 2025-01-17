<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys\standards;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys\typeStatistic;

class summarys extends Model
{
    /**
     * @var int
     */
    public $failCount;
    /**
     * @var int
     */
    public $passCount;
    /**
     * @var standards[]
     */
    public $standards;
    /**
     * @var string
     */
    public $type;
    /**
     * @var typeStatistic
     */
    public $typeStatistic;
    protected $_name = [
        'failCount'     => 'FailCount',
        'passCount'     => 'PassCount',
        'standards'     => 'Standards',
        'type'          => 'Type',
        'typeStatistic' => 'TypeStatistic',
    ];

    public function validate()
    {
        if (\is_array($this->standards)) {
            Model::validateArray($this->standards);
        }
        if (null !== $this->typeStatistic) {
            $this->typeStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }

        if (null !== $this->standards) {
            if (\is_array($this->standards)) {
                $res['Standards'] = [];
                $n1               = 0;
                foreach ($this->standards as $item1) {
                    $res['Standards'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeStatistic) {
            $res['TypeStatistic'] = null !== $this->typeStatistic ? $this->typeStatistic->toArray($noStream) : $this->typeStatistic;
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }

        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n1               = 0;
                foreach ($map['Standards'] as $item1) {
                    $model->standards[$n1++] = standards::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeStatistic'])) {
            $model->typeStatistic = typeStatistic::fromMap($map['TypeStatistic']);
        }

        return $model;
    }
}
