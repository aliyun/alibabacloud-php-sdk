<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsLogStoreResponseBody extends Model
{
    /**
     * @description The name of the Logstore.
     *
     * @example wafng-logstore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The name of the Simple Log Service project.
     *
     * @example wafng-project-14316572********-cn-hangzhou
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The capacity of the Logstore. Unit: bytes.
     *
     * @example 3298534883328
     *
     * @var int
     */
    public $quota;

    /**
     * @description The request ID.
     *
     * @example CAC0A24B-486A-5E12-9894-BE860E5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The storage duration of the Logstore. Unit: days.
     *
     * @example 180
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The used capacity of the Logstore. Unit: bytes.
     *
     * @example 35471136
     *
     * @var int
     */
    public $used;
    protected $_name = [
        'logStoreName' => 'LogStoreName',
        'projectName'  => 'ProjectName',
        'quota'        => 'Quota',
        'requestId'    => 'RequestId',
        'ttl'          => 'Ttl',
        'used'         => 'Used',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeSlsLogStoreResponseBody
     */
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
