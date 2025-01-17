<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeLogstoreStorageResponseBody extends Model
{
    /**
     * @var string
     */
    public $logstore;
    /**
     * @var int
     */
    public $preserve;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $ttl;
    /**
     * @var int
     */
    public $used;
    /**
     * @var string
     */
    public $userProject;
    protected $_name = [
        'logstore'    => 'Logstore',
        'preserve'    => 'Preserve',
        'requestId'   => 'RequestId',
        'ttl'         => 'Ttl',
        'used'        => 'Used',
        'userProject' => 'UserProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }

        if (null !== $this->preserve) {
            $res['Preserve'] = $this->preserve;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }

        if (null !== $this->userProject) {
            $res['UserProject'] = $this->userProject;
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
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }

        if (isset($map['Preserve'])) {
            $model->preserve = $map['Preserve'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        if (isset($map['UserProject'])) {
            $model->userProject = $map['UserProject'];
        }

        return $model;
    }
}
