<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of failed archiving tickets.
     *
     * @example 1**
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The number of in-progress archiving tickets.
     *
     * @example 2**
     *
     * @var int
     */
    public $processingCount;

    /**
     * @description The number of successful archiving tickets.
     *
     * @example 3**
     *
     * @var int
     */
    public $successCount;

    /**
     * @description The total number of archiving tickets.
     *
     * @example 6**
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failCount'       => 'FailCount',
        'processingCount' => 'ProcessingCount',
        'successCount'    => 'SuccessCount',
        'totalCount'      => 'TotalCount',
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
        if (null !== $this->processingCount) {
            $res['ProcessingCount'] = $this->processingCount;
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
        if (isset($map['ProcessingCount'])) {
            $model->processingCount = $map['ProcessingCount'];
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
