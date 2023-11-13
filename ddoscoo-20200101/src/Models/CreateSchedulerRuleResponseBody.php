<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateSchedulerRuleResponseBody extends Model
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
     * @example 8DFB602D-1AAC-46C4-90F2-C84086E7A6E4
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
     * @return CreateSchedulerRuleResponseBody
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
