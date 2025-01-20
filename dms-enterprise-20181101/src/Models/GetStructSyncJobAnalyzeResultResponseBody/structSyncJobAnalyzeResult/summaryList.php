<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult;

use AlibabaCloud\Dara\Model;

class summaryList extends Model
{
    /**
     * @var string
     */
    public $compareType;
    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'compareType' => 'CompareType',
        'count'       => 'Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareType) {
            $res['CompareType'] = $this->compareType;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['CompareType'])) {
            $model->compareType = $map['CompareType'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
