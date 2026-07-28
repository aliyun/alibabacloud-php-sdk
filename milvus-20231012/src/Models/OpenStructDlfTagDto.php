<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class OpenStructDlfTagDto extends Model
{
    /**
     * @var int
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var int
     */
    public $timeMillis;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'snapshotId' => 'snapshotId',
        'tagName' => 'tagName',
        'timeMillis' => 'timeMillis',
        'totalRecordCount' => 'totalRecordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['snapshotId'] = $this->snapshotId;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        if (null !== $this->timeMillis) {
            $res['timeMillis'] = $this->timeMillis;
        }

        if (null !== $this->totalRecordCount) {
            $res['totalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['snapshotId'])) {
            $model->snapshotId = $map['snapshotId'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        if (isset($map['timeMillis'])) {
            $model->timeMillis = $map['timeMillis'];
        }

        if (isset($map['totalRecordCount'])) {
            $model->totalRecordCount = $map['totalRecordCount'];
        }

        return $model;
    }
}
