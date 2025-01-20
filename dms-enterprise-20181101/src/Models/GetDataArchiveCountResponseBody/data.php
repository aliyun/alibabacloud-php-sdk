<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failCount;
    /**
     * @var int
     */
    public $processingCount;
    /**
     * @var int
     */
    public $successCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
