<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeSlsLogstoreInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $logStore;
    /**
     * @var string
     */
    public $project;
    /**
     * @var int
     */
    public $quota;
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
        'logStore'  => 'LogStore',
        'project'   => 'Project',
        'quota'     => 'Quota',
        'requestId' => 'RequestId',
        'ttl'       => 'Ttl',
        'used'      => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
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
