<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeSlsLogStoreResponseBody extends Model
{
    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $projectName;

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
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'quota' => 'Quota',
        'requestId' => 'RequestId',
        'ttl' => 'Ttl',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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
