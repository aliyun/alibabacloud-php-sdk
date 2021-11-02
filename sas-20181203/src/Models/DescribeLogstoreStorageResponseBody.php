<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'logstore'  => 'Logstore',
        'preserve'  => 'Preserve',
        'requestId' => 'RequestId',
        'ttl'       => 'Ttl',
        'used'      => 'Used',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogstoreStorageResponseBody
     */
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

        return $model;
    }
}
