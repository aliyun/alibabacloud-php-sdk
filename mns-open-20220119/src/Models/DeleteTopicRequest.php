<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class DeleteTopicRequest extends Model
{
    /**
     * @example tf-testAccMNSTopic-112965059402264645
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
