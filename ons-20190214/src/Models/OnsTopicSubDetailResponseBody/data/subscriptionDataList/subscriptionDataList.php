<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponseBody\data\subscriptionDataList;

use AlibabaCloud\Tea\Model;

class subscriptionDataList extends Model
{
    /**
     * @description The ID of the consumer group that subscribes to the topic.
     *
     * @example GID_test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The consumption mode. Valid values:
     *
     *   **CLUSTERING**: the clustering consumption mode
     *   **BROADCASTING**: the broadcasting consumption mode
     *
     * For more information about consumption modes, see [Clustering consumption and broadcasting consumption](~~43163~~).
     * @example CLUSTERING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @description The expression based on which consumers in the consumer group subscribe to the topic.
     *
     * @example *
     *
     * @var string
     */
    public $subString;
    protected $_name = [
        'groupId'      => 'GroupId',
        'messageModel' => 'MessageModel',
        'subString'    => 'SubString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
        }
        if (null !== $this->subString) {
            $res['SubString'] = $this->subString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }
        if (isset($map['SubString'])) {
            $model->subString = $map['SubString'];
        }

        return $model;
    }
}
