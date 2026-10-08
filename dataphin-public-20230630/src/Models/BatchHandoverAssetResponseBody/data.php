<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchHandoverAssetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string[]
     */
    public $failedGuids;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'failCount' => 'FailCount',
        'failedGuids' => 'FailedGuids',
        'status' => 'Status',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedGuids)) {
            Model::validateArray($this->failedGuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->failedGuids) {
            if (\is_array($this->failedGuids)) {
                $res['FailedGuids'] = [];
                $n1 = 0;
                foreach ($this->failedGuids as $item1) {
                    $res['FailedGuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['FailedGuids'])) {
            if (!empty($map['FailedGuids'])) {
                $model->failedGuids = [];
                $n1 = 0;
                foreach ($map['FailedGuids'] as $item1) {
                    $model->failedGuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
