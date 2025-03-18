<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponseBody\data;

use AlibabaCloud\Tea\Model;

class dlqPolicy extends Model
{
    /**
     * @description The queue to which dead-letter messages are delivered.
     *
     * @example deadLetterTargetQueue
     *
     * @var string
     */
    public $deadLetterTargetQueue;

    /**
     * @description Specifies whether to enable the dead-letter message delivery.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'deadLetterTargetQueue' => 'DeadLetterTargetQueue',
        'enabled' => 'Enabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deadLetterTargetQueue) {
            $res['DeadLetterTargetQueue'] = $this->deadLetterTargetQueue;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dlqPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeadLetterTargetQueue'])) {
            $model->deadLetterTargetQueue = $map['DeadLetterTargetQueue'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
