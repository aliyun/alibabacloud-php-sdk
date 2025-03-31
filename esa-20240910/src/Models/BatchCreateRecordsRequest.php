<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList;

class BatchCreateRecordsRequest extends Model
{
    /**
     * @var recordList[]
     */
    public $recordList;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'recordList' => 'RecordList',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->recordList)) {
            Model::validateArray($this->recordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordList) {
            if (\is_array($this->recordList)) {
                $res['RecordList'] = [];
                $n1 = 0;
                foreach ($this->recordList as $item1) {
                    $res['RecordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n1 = 0;
                foreach ($map['RecordList'] as $item1) {
                    $model->recordList[$n1++] = recordList::fromMap($item1);
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
