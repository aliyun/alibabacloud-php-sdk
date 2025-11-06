<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponseBody\content\data\deliver;

class data extends Model
{
    /**
     * @var deliver
     */
    public $deliver;

    /**
     * @var int
     */
    public $reportId;
    protected $_name = [
        'deliver' => 'deliver',
        'reportId' => 'reportId',
    ];

    public function validate()
    {
        if (null !== $this->deliver) {
            $this->deliver->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliver) {
            $res['deliver'] = null !== $this->deliver ? $this->deliver->toArray($noStream) : $this->deliver;
        }

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
        if (isset($map['deliver'])) {
            $model->deliver = deliver::fromMap($map['deliver']);
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        return $model;
    }
}
