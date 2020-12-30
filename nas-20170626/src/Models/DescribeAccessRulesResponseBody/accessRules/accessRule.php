<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponseBody\accessRules;

use AlibabaCloud\Tea\Model;

class accessRule extends Model
{
    /**
     * @var string
     */
    public $accessRuleId;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var string
     */
    public $RWAccess;

    /**
     * @var string
     */
    public $userAccess;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'accessRuleId'     => 'AccessRuleId',
        'sourceCidrIp'     => 'SourceCidrIp',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'RWAccess'         => 'RWAccess',
        'userAccess'       => 'UserAccess',
        'priority'         => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->RWAccess) {
            $res['RWAccess'] = $this->RWAccess;
        }
        if (null !== $this->userAccess) {
            $res['UserAccess'] = $this->userAccess;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['RWAccess'])) {
            $model->RWAccess = $map['RWAccess'];
        }
        if (isset($map['UserAccess'])) {
            $model->userAccess = $map['UserAccess'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
