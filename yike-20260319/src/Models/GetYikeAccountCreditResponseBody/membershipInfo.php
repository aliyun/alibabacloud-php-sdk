<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAccountCreditResponseBody;

use AlibabaCloud\Dara\Model;

class membershipInfo extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $membership;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'membership' => 'Membership',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->membership) {
            $res['Membership'] = $this->membership;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Membership'])) {
            $model->membership = $map['Membership'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
