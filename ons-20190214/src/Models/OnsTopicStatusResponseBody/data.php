<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The point in time when the latest message is ready in the topic. If no message exists in the topic, the return value of this parameter is 0.
     *
     * For information about the definition of ready messages and ready time, see [Terms](~~29533~~).
     * @example 1570864984364
     *
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @description Indicates the operations that you can perform on the topic. Valid values:
     *
     *   **2**: You can publish messages to the topic.
     *   **4**: You can subscribe to the topic.
     *   **6**: You can publish messages to and subscribe to the topic.
     *
     * @example 6
     *
     * @var int
     */
    public $perm;

    /**
     * @description The total number of messages in all partitions of the topic.
     *
     * @example 2310
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lastTimeStamp' => 'LastTimeStamp',
        'perm'          => 'Perm',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->perm) {
            $res['Perm'] = $this->perm;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['Perm'])) {
            $model->perm = $map['Perm'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
