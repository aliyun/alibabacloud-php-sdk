<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponseBody\bizMessages;

use AlibabaCloud\Tea\Model;

class bizMessage extends Model
{
    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $contentMapJson;

    /**
     * @var int
     */
    public $dataId;
    protected $_name = [
        'pubTime'        => 'PubTime',
        'topic'          => 'Topic',
        'contentMapJson' => 'ContentMapJson',
        'dataId'         => 'DataId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->contentMapJson) {
            $res['ContentMapJson'] = $this->contentMapJson;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['ContentMapJson'])) {
            $model->contentMapJson = $map['ContentMapJson'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
