<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Tea\Model;

class alert extends Model
{
    /**
     * @description The notification method.
     * - Sms: Sms only
     * - Mail: Mail only
     * - SmsMail: SMS and email.
     *
     * @example Sms
     *
     * @var string
     */
    public $noticeType;

    /**
     * @description The alert policy.
     * - Success: successful alert
     * - Failure: failed alarm
     * - SuccessFailure: alerts for both success and failure
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
