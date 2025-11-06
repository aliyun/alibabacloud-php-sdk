<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data;

use AlibabaCloud\Dara\Model;

class reports extends Model
{
    /**
     * @var int
     */
    public $reportId;
    protected $_name = [
        'reportId' => 'reportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
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
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        return $model;
    }
}
