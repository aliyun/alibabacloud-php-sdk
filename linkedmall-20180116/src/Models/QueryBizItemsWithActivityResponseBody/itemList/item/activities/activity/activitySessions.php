<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession;
use AlibabaCloud\Tea\Model;

class activitySessions extends Model
{
    /**
     * @var activitySession[]
     */
    public $activitySession;
    protected $_name = [
        'activitySession' => 'ActivitySession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activitySession) {
            $res['ActivitySession'] = [];
            if (null !== $this->activitySession && \is_array($this->activitySession)) {
                $n = 0;
                foreach ($this->activitySession as $item) {
                    $res['ActivitySession'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activitySessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivitySession'])) {
            if (!empty($map['ActivitySession'])) {
                $model->activitySession = [];
                $n                      = 0;
                foreach ($map['ActivitySession'] as $item) {
                    $model->activitySession[$n++] = null !== $item ? activitySession::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
