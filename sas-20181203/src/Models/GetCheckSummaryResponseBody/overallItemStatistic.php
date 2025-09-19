<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class overallItemStatistic extends Model
{
    /**
     * @var int
     */
    public $releaseCount;

    /**
     * @var int
     */
    public $resultCount;
    protected $_name = [
        'releaseCount' => 'ReleaseCount',
        'resultCount' => 'ResultCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseCount) {
            $res['ReleaseCount'] = $this->releaseCount;
        }

        if (null !== $this->resultCount) {
            $res['ResultCount'] = $this->resultCount;
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
        if (isset($map['ReleaseCount'])) {
            $model->releaseCount = $map['ReleaseCount'];
        }

        if (isset($map['ResultCount'])) {
            $model->resultCount = $map['ResultCount'];
        }

        return $model;
    }
}
