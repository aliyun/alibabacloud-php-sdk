<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateRulesApplyResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error codes when the firewall template rule fails to be applied.
     *
     * @example 500
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is displayed when the firewall template rule fails to be applied.
     *
     * @example An error occurred while processing your request.
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description The port range. Valid values: 1 to 65535. Specify a port range in the format of \\<start port number>/\\<end port number>. Example: `1024/1055`, which indicates that the port range of 1024 to 1055.
     *
     * >  If you set RuleProtocol to ICMP, you must set Port to -1/-1.
     *
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @description The remarks of the firewall rule.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The transport layer protocol that the rule supports. Valid values:
     *
     *   TCP
     *   UDP
     *   TCP+UDP
     *   ICMP
     *
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;

    /**
     * @description The source address to which you want to grant access permissions. CIDR blocks and IPv4 addresses are supported.
     *
     * @example 119.145.XX.XX
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The status of applying the firewall template rule to the simple application servers.
     *
     *   Pending: The template rule does not start to be applied to the simple application servers.
     *   Applying: The template rule is being applied to the simple application servers.
     *   Success: The template rule is successfully applied to the simple application servers.
     *   PartFailed: The template rule fails to be applied to some simple application servers.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorInfo' => 'ErrorInfo',
        'port' => 'Port',
        'remark' => 'Remark',
        'ruleProtocol' => 'RuleProtocol',
        'sourceCidrIp' => 'SourceCidrIp',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleProtocol) {
            $res['RuleProtocol'] = $this->ruleProtocol;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleProtocol'])) {
            $model->ruleProtocol = $map['RuleProtocol'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
