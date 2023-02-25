<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody\erAccData;

use AlibabaCloud\Tea\Model;

class erAccItem extends Model
{
    /**
     * @description The number of ER requests.
     *
     * @example 125
     *
     * @var int
     */
    public $erAcc;

    /**
     * @description The ID of the ER. This parameter is returned only when SplitBy is set to routine.
     *
     * @example routine1.test
     *
     * @var string
     */
    public $routine;

    /**
     * @description The specification of the ER. This parameter is returned only when SplitBy is set to spec.
     *
     * @example 50ms
     *
     * @var string
     */
    public $spec;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2018-10-30T13:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'erAcc'     => 'ErAcc',
        'routine'   => 'Routine',
        'spec'      => 'Spec',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erAcc) {
            $res['ErAcc'] = $this->erAcc;
        }
        if (null !== $this->routine) {
            $res['Routine'] = $this->routine;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return erAccItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErAcc'])) {
            $model->erAcc = $map['ErAcc'];
        }
        if (isset($map['Routine'])) {
            $model->routine = $map['Routine'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
