<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsLogstoreInfoResponseBody extends Model
{
    /**
     * @description The Logstore of the Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * @example ddoscoo-logstore
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The Logstore project of the Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * @example ddoscoo-project-181071506993****-cn-hangzhou
     *
     * @var string
     */
    public $project;

    /**
     * @description The available log storage capacity. Unit: bytes.
     *
     * @example 3298534883328
     *
     * @var int
     */
    public $quota;

    /**
     * @description The ID of the request.
     *
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The log storage duration. Unit: days.
     *
     * @example 180
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The used log storage capacity. Unit: bytes.
     *
     * > The statistics on Log Service are delayed for about two hours.
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeSlsLogstoreInfoResponseBody
     */
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
