<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class failResults extends Model
{
    /**
     * @description The Alibaba Cloud account of the members in a resource directory whose quota increase request is rejected.
     *
     * @example 135048337611****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @description The reason for the rejection.
     *
     * @example The quota adjustment application is being processed. Please try again later.
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'reason'    => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
