<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeLakebaseS3AccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userAccAk;

    /**
     * @var string
     */
    public $userAccPolicy;

    /**
     * @var string
     */
    public $userAccSk;
    protected $_name = [
        'requestId' => 'RequestId',
        'userAccAk' => 'UserAccAk',
        'userAccPolicy' => 'UserAccPolicy',
        'userAccSk' => 'UserAccSk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userAccAk) {
            $res['UserAccAk'] = $this->userAccAk;
        }

        if (null !== $this->userAccPolicy) {
            $res['UserAccPolicy'] = $this->userAccPolicy;
        }

        if (null !== $this->userAccSk) {
            $res['UserAccSk'] = $this->userAccSk;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserAccAk'])) {
            $model->userAccAk = $map['UserAccAk'];
        }

        if (isset($map['UserAccPolicy'])) {
            $model->userAccPolicy = $map['UserAccPolicy'];
        }

        if (isset($map['UserAccSk'])) {
            $model->userAccSk = $map['UserAccSk'];
        }

        return $model;
    }
}
