<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody\recordDeleteInfoList\recordDeleteInfo;

class recordDeleteInfoList extends Model
{
    /**
     * @var recordDeleteInfo[]
     */
    public $recordDeleteInfo;
    protected $_name = [
        'recordDeleteInfo' => 'RecordDeleteInfo',
    ];

    public function validate()
    {
        if (\is_array($this->recordDeleteInfo)) {
            Model::validateArray($this->recordDeleteInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordDeleteInfo) {
            if (\is_array($this->recordDeleteInfo)) {
                $res['RecordDeleteInfo'] = [];
                $n1 = 0;
                foreach ($this->recordDeleteInfo as $item1) {
                    $res['RecordDeleteInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecordDeleteInfo'])) {
            if (!empty($map['RecordDeleteInfo'])) {
                $model->recordDeleteInfo = [];
                $n1 = 0;
                foreach ($map['RecordDeleteInfo'] as $item1) {
                    $model->recordDeleteInfo[$n1] = recordDeleteInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
