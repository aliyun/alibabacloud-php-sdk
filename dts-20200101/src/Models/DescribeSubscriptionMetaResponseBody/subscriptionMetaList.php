<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaResponseBody;

use AlibabaCloud\Dara\Model;

class subscriptionMetaList extends Model
{
    /**
     * @var int
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $DBList;

    /**
     * @var string
     */
    public $DProxyUrl;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'checkpoint' => 'Checkpoint',
        'DBList' => 'DBList',
        'DProxyUrl' => 'DProxyUrl',
        'sid' => 'Sid',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }

        if (null !== $this->DProxyUrl) {
            $res['DProxyUrl'] = $this->DProxyUrl;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }

        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }

        if (isset($map['DProxyUrl'])) {
            $model->DProxyUrl = $map['DProxyUrl'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
