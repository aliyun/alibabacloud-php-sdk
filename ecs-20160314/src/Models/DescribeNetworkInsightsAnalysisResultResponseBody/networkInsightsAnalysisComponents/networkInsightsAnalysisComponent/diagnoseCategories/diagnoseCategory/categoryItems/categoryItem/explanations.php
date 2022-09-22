<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations\networkAclEntry;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations\relativeGroupIds;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations\securityGroupAcl;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem\explanations\topProcesses;
use AlibabaCloud\Tea\Model;

class explanations extends Model
{
    /**
     * @var string
     */
    public $actualIP;

    /**
     * @var int
     */
    public $actualPort;

    /**
     * @var string
     */
    public $expectIP;

    /**
     * @var int
     */
    public $expectPort;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $header;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $missingFiles;

    /**
     * @var string
     */
    public $netmask;

    /**
     * @var networkAclEntry
     */
    public $networkAclEntry;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var relativeGroupIds
     */
    public $relativeGroupIds;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var securityGroupAcl
     */
    public $securityGroupAcl;

    /**
     * @var topProcesses
     */
    public $topProcesses;

    /**
     * @var string
     */
    public $usePercent;
    protected $_name = [
        'actualIP'             => 'ActualIP',
        'actualPort'           => 'ActualPort',
        'expectIP'             => 'ExpectIP',
        'expectPort'           => 'ExpectPort',
        'expireDate'           => 'ExpireDate',
        'groupId'              => 'GroupId',
        'header'               => 'Header',
        'ip'                   => 'Ip',
        'missingFiles'         => 'MissingFiles',
        'netmask'              => 'Netmask',
        'networkAclEntry'      => 'NetworkAclEntry',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'port'                 => 'Port',
        'processName'          => 'ProcessName',
        'relativeGroupIds'     => 'RelativeGroupIds',
        'rule'                 => 'Rule',
        'securityGroupAcl'     => 'SecurityGroupAcl',
        'topProcesses'         => 'TopProcesses',
        'usePercent'           => 'UsePercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualIP) {
            $res['ActualIP'] = $this->actualIP;
        }
        if (null !== $this->actualPort) {
            $res['ActualPort'] = $this->actualPort;
        }
        if (null !== $this->expectIP) {
            $res['ExpectIP'] = $this->expectIP;
        }
        if (null !== $this->expectPort) {
            $res['ExpectPort'] = $this->expectPort;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->missingFiles) {
            $res['MissingFiles'] = $this->missingFiles;
        }
        if (null !== $this->netmask) {
            $res['Netmask'] = $this->netmask;
        }
        if (null !== $this->networkAclEntry) {
            $res['NetworkAclEntry'] = null !== $this->networkAclEntry ? $this->networkAclEntry->toMap() : null;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->relativeGroupIds) {
            $res['RelativeGroupIds'] = null !== $this->relativeGroupIds ? $this->relativeGroupIds->toMap() : null;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->securityGroupAcl) {
            $res['SecurityGroupAcl'] = null !== $this->securityGroupAcl ? $this->securityGroupAcl->toMap() : null;
        }
        if (null !== $this->topProcesses) {
            $res['TopProcesses'] = null !== $this->topProcesses ? $this->topProcesses->toMap() : null;
        }
        if (null !== $this->usePercent) {
            $res['UsePercent'] = $this->usePercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return explanations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualIP'])) {
            $model->actualIP = $map['ActualIP'];
        }
        if (isset($map['ActualPort'])) {
            $model->actualPort = $map['ActualPort'];
        }
        if (isset($map['ExpectIP'])) {
            $model->expectIP = $map['ExpectIP'];
        }
        if (isset($map['ExpectPort'])) {
            $model->expectPort = $map['ExpectPort'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['MissingFiles'])) {
            $model->missingFiles = $map['MissingFiles'];
        }
        if (isset($map['Netmask'])) {
            $model->netmask = $map['Netmask'];
        }
        if (isset($map['NetworkAclEntry'])) {
            $model->networkAclEntry = networkAclEntry::fromMap($map['NetworkAclEntry']);
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['RelativeGroupIds'])) {
            $model->relativeGroupIds = relativeGroupIds::fromMap($map['RelativeGroupIds']);
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['SecurityGroupAcl'])) {
            $model->securityGroupAcl = securityGroupAcl::fromMap($map['SecurityGroupAcl']);
        }
        if (isset($map['TopProcesses'])) {
            $model->topProcesses = topProcesses::fromMap($map['TopProcesses']);
        }
        if (isset($map['UsePercent'])) {
            $model->usePercent = $map['UsePercent'];
        }

        return $model;
    }
}
