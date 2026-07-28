<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeProfileResponseBody extends Model
{
    /**
     * @var string
     */
    public $profile;

    /**
     * @var mixed
     */
    public $profileSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'profile' => 'Profile',
        'profileSummary' => 'ProfileSummary',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        if (null !== $this->profileSummary) {
            $res['ProfileSummary'] = $this->profileSummary;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        if (isset($map['ProfileSummary'])) {
            $model->profileSummary = $map['ProfileSummary'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
