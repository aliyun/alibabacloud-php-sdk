<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeWafUsageDataResponseBody;

use AlibabaCloud\Dara\Model;

class usageData extends Model
{
    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var int
     */
    public $blockCount;

    /**
     * @var int
     */
    public $observeCount;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'accessCount' => 'AccessCount',
        'blockCount' => 'BlockCount',
        'observeCount' => 'ObserveCount',
        'recordName' => 'RecordName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }

        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }

        if (null !== $this->observeCount) {
            $res['ObserveCount'] = $this->observeCount;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }

        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        if (isset($map['ObserveCount'])) {
            $model->observeCount = $map['ObserveCount'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
