<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogstoreStorageResponseBody extends Model
{
    /**
     * @description WB01014029
     *
     * @example sas-log
     *
     * @var string
     */
    public $logstore;

    /**
     * @example 12240
     *
     * @var int
     */
    public $preserve;

    /**
     * @description 谈佳伟
     *
     * @example 25EC270F-5783-4416-AD7C-1EDF063A039C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description DescribeLogstoreStorage
     *
     * @example 180
     *
     * @var int
     */
    public $ttl;

    /**
     * @description Queries the purchased log storage capacity.
     *
     * @example 335
     *
     * @var int
     */
    public $used;

    /**
     * @example sas-log-XXXX-cn-hangzhou
     *
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
        if (null !== $this->userProject) {
            $res['UserProject'] = $this->userProject;
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
        if (isset($map['UserProject'])) {
            $model->userProject = $map['UserProject'];
        }

        return $model;
    }
}
