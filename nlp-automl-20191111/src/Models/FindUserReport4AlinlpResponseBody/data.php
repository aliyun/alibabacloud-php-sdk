<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models\FindUserReport4AlinlpResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failCount;

    /**
     * @var int
     */
    public $qpsMax;

    /**
     * @var string
     */
    public $rptTime;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failCount'    => 'FailCount',
        'qpsMax'       => 'QpsMax',
        'rptTime'      => 'RptTime',
        'successCount' => 'SuccessCount',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->qpsMax) {
            $res['QpsMax'] = $this->qpsMax;
        }
        if (null !== $this->rptTime) {
            $res['RptTime'] = $this->rptTime;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['QpsMax'])) {
            $model->qpsMax = $map['QpsMax'];
        }
        if (isset($map['RptTime'])) {
            $model->rptTime = $map['RptTime'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
