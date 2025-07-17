<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Tea\Model;

class alert extends Model
{
    /**
     * @description The alert notification method. Valid values:
     *
     *   Sms
     *   Mail
     *   SmsMail
     *
     * @example Sms
     *
     * @var string
     */
    public $noticeType;

    /**
     * @description The alerting policy. Valid values:
     *
     *   Success: An alert is reported when data backfill succeeds.
     *   Failure: An alert is reported when data backfill fails.
     *   SuccessFailure: An alert is reported regardless of whether data backfill succeeds or fails.
     *
     * @example Succes
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'noticeType' => 'NoticeType',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
