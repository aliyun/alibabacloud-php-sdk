<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsLogstoreInfoResponseBody extends Model
{
    /**
     * @example ddoscoo-logstore
     *
     * @var string
     */
    public $logStore;

    /**
     * @example ddoscoo-project-xxxx-cn-hangzhou
     *
     * @var string
     */
    public $project;

    /**
     * @example 5497558138880
     *
     * @var int
     */
    public $quota;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $ttl;

    /**
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
