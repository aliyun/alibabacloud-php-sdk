<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySchedulerRuleResponseBody extends Model
{
    /**
     * @description The CNAME that is assigned by Sec-Traffic Manager for the scheduling rule.
     *
     * > To enable the scheduling rule, you must map the domain name of the service to the CNAME.
     * @example 48k7b372gpl4****.aliyunddos0001.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example FFC77501-BDF8-4BC8-9BF5-B295FBC3189B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the rule.
     *
     * @example testrule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'cname'     => 'Cname',
        'requestId' => 'RequestId',
        'ruleName'  => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySchedulerRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
