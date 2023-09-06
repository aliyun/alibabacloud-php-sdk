<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponseBody;

use AlibabaCloud\Tea\Model;

class defaultReceivedConvs extends Model
{
    /**
     * @example cid12334##2341
     *
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultReceivedConvs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
