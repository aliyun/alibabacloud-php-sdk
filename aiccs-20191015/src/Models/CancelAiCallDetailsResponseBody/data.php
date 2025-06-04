<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelAiCallDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var mixed[]
     */
    public $failedDetails;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var int
     */
    public $succeedCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'failedDetails' => 'FailedDetails',
        'resultCode' => 'ResultCode',
        'succeedCount' => 'SucceedCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedDetails)) {
            Model::validateArray($this->failedDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->failedDetails) {
            if (\is_array($this->failedDetails)) {
                $res['FailedDetails'] = [];
                foreach ($this->failedDetails as $key1 => $value1) {
                    $res['FailedDetails'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->succeedCount) {
            $res['SucceedCount'] = $this->succeedCount;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FailedDetails'])) {
            if (!empty($map['FailedDetails'])) {
                $model->failedDetails = [];
                foreach ($map['FailedDetails'] as $key1 => $value1) {
                    $model->failedDetails[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['SucceedCount'])) {
            $model->succeedCount = $map['SucceedCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
