<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeSmsSignStatusResponseBody;

use AlibabaCloud\Tea\Model;

class signStatuses extends Model
{
    /**
     * @var string
     */
    public $signId;

    /**
     * @var int
     */
    public $signStatus;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'signId'     => 'SignId',
        'signStatus' => 'SignStatus',
        'reason'     => 'Reason',
        'signName'   => 'SignName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }
        if (null !== $this->signStatus) {
            $res['SignStatus'] = $this->signStatus;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }
        if (isset($map['SignStatus'])) {
            $model->signStatus = $map['SignStatus'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
