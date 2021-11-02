<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponseBody\bizMessages;

use AlibabaCloud\Tea\Model;

class bizMessage extends Model
{
    /**
     * @var string
     */
    public $contentMapJson;

    /**
     * @var int
     */
    public $dataId;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'contentMapJson' => 'ContentMapJson',
        'dataId'         => 'DataId',
        'pubTime'        => 'PubTime',
        'topic'          => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentMapJson) {
            $res['ContentMapJson'] = $this->contentMapJson;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ContentMapJson'])) {
            $model->contentMapJson = $map['ContentMapJson'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
