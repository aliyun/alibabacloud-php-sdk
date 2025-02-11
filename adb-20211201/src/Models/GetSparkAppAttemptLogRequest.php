<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetSparkAppAttemptLogRequest extends Model
{
    /**
     * @var string
     */
    public $attemptId;
    /**
     * @var int
     */
    public $logLength;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'attemptId'  => 'AttemptId',
        'logLength'  => 'LogLength',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }

        if (null !== $this->logLength) {
            $res['LogLength'] = $this->logLength;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }

        if (isset($map['LogLength'])) {
            $model->logLength = $map['LogLength'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
