<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponseBody\recordIndexInfoList\recordIndexInfo;

class recordIndexInfoList extends Model
{
    /**
     * @var recordIndexInfo[]
     */
    public $recordIndexInfo;
    protected $_name = [
        'recordIndexInfo' => 'RecordIndexInfo',
    ];

    public function validate()
    {
        if (\is_array($this->recordIndexInfo)) {
            Model::validateArray($this->recordIndexInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordIndexInfo) {
            if (\is_array($this->recordIndexInfo)) {
                $res['RecordIndexInfo'] = [];
                $n1 = 0;
                foreach ($this->recordIndexInfo as $item1) {
                    $res['RecordIndexInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecordIndexInfo'])) {
            if (!empty($map['RecordIndexInfo'])) {
                $model->recordIndexInfo = [];
                $n1 = 0;
                foreach ($map['RecordIndexInfo'] as $item1) {
                    $model->recordIndexInfo[$n1] = recordIndexInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
