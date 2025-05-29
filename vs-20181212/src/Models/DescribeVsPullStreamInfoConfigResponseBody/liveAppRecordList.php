<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponseBody\liveAppRecordList\liveAppRecord;

class liveAppRecordList extends Model
{
    /**
     * @var liveAppRecord[]
     */
    public $liveAppRecord;
    protected $_name = [
        'liveAppRecord' => 'LiveAppRecord',
    ];

    public function validate()
    {
        if (\is_array($this->liveAppRecord)) {
            Model::validateArray($this->liveAppRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveAppRecord) {
            if (\is_array($this->liveAppRecord)) {
                $res['LiveAppRecord'] = [];
                $n1 = 0;
                foreach ($this->liveAppRecord as $item1) {
                    $res['LiveAppRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['LiveAppRecord'])) {
            if (!empty($map['LiveAppRecord'])) {
                $model->liveAppRecord = [];
                $n1 = 0;
                foreach ($map['LiveAppRecord'] as $item1) {
                    $model->liveAppRecord[$n1++] = liveAppRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
