<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsLogstoreInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var int
     */
    public $used;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'project'   => 'Project',
        'requestId' => 'RequestId',
        'quota'     => 'Quota',
        'logStore'  => 'LogStore',
        'used'      => 'Used',
        'ttl'       => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlsLogstoreInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
