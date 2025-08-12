<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody\recordContentInfoList\recordContentInfo;

class recordContentInfoList extends Model
{
    /**
     * @var recordContentInfo[]
     */
    public $recordContentInfo;
    protected $_name = [
        'recordContentInfo' => 'RecordContentInfo',
    ];

    public function validate()
    {
        if (\is_array($this->recordContentInfo)) {
            Model::validateArray($this->recordContentInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordContentInfo) {
            if (\is_array($this->recordContentInfo)) {
                $res['RecordContentInfo'] = [];
                $n1 = 0;
                foreach ($this->recordContentInfo as $item1) {
                    $res['RecordContentInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RecordContentInfo'])) {
            if (!empty($map['RecordContentInfo'])) {
                $model->recordContentInfo = [];
                $n1 = 0;
                foreach ($map['RecordContentInfo'] as $item1) {
                    $model->recordContentInfo[$n1] = recordContentInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
