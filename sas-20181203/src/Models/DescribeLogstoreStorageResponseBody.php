<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogstoreStorageResponseBody extends Model
{
    /**
     * @description The name of the dedicated Logstore that is used to store full logs of Security Center. The value is fixed as **sas-log**.
     *
     * @example sas-log
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The purchased log storage capacity, in GB.
     *
     * @example 12240
     *
     * @var int
     */
    public $preserve;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 25EC270F-5783-4416-AD7C-1EDF063A039C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of days during which logs can be retained. The value is fixed as **180**, which indicates that logs can be retained for 180 days.
     *
     * >  You are not allowed to change the value of this parameter.
     * @example 180
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The used log storage capacity, in GB.
     *
     * @example 335
     *
     * @var int
     */
    public $used;

    /**
     * @description The name of the dedicated Project that is used to store full logs of Security Center.
     *
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
