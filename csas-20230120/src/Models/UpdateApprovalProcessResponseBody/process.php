<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\undefined;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\appUninstallPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\deviceRegistrationPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\dlpSendPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\domainBlacklistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\domainWhitelistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\endpointHardeningPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\peripheraBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\softwareBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\softwareHardeningPolicies;
use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @var appUninstallPolicies
     */
    public $appUninstallPolicies;

    /**
     * @example 2022-07-11 15:31:39
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var deviceRegistrationPolicies
     */
    public $deviceRegistrationPolicies;

    /**
     * @var dlpSendPolicies
     */
    public $dlpSendPolicies;

    /**
     * @var domainBlacklistPolicies
     */
    public $domainBlacklistPolicies;

    /**
     * @var domainWhitelistPolicies
     */
    public $domainWhitelistPolicies;

    /**
     * @var endpointHardeningPolicies
     */
    public $endpointHardeningPolicies;

    /**
     * @var peripheraBlockPolicies
     */
    public $peripheraBlockPolicies;

    /**
     * @example approval-process-2677fcf063f5****
     *
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var undefined[][]
     */
    public $processNodes;

    /**
     * @var softwareBlockPolicies
     */
    public $softwareBlockPolicies;

    /**
     * @var softwareHardeningPolicies
     */
    public $softwareHardeningPolicies;
    protected $_name = [
        'appUninstallPolicies' => 'AppUninstallPolicies',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'deviceRegistrationPolicies' => 'DeviceRegistrationPolicies',
        'dlpSendPolicies' => 'DlpSendPolicies',
        'domainBlacklistPolicies' => 'DomainBlacklistPolicies',
        'domainWhitelistPolicies' => 'DomainWhitelistPolicies',
        'endpointHardeningPolicies' => 'EndpointHardeningPolicies',
        'peripheraBlockPolicies' => 'PeripheraBlockPolicies',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processNodes' => 'ProcessNodes',
        'softwareBlockPolicies' => 'SoftwareBlockPolicies',
        'softwareHardeningPolicies' => 'SoftwareHardeningPolicies',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUninstallPolicies) {
            $res['AppUninstallPolicies'] = null !== $this->appUninstallPolicies ? $this->appUninstallPolicies->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceRegistrationPolicies) {
            $res['DeviceRegistrationPolicies'] = null !== $this->deviceRegistrationPolicies ? $this->deviceRegistrationPolicies->toMap() : null;
        }
        if (null !== $this->dlpSendPolicies) {
            $res['DlpSendPolicies'] = null !== $this->dlpSendPolicies ? $this->dlpSendPolicies->toMap() : null;
        }
        if (null !== $this->domainBlacklistPolicies) {
            $res['DomainBlacklistPolicies'] = null !== $this->domainBlacklistPolicies ? $this->domainBlacklistPolicies->toMap() : null;
        }
        if (null !== $this->domainWhitelistPolicies) {
            $res['DomainWhitelistPolicies'] = null !== $this->domainWhitelistPolicies ? $this->domainWhitelistPolicies->toMap() : null;
        }
        if (null !== $this->endpointHardeningPolicies) {
            $res['EndpointHardeningPolicies'] = null !== $this->endpointHardeningPolicies ? $this->endpointHardeningPolicies->toMap() : null;
        }
        if (null !== $this->peripheraBlockPolicies) {
            $res['PeripheraBlockPolicies'] = null !== $this->peripheraBlockPolicies ? $this->peripheraBlockPolicies->toMap() : null;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processNodes) {
            $res['ProcessNodes'] = $this->processNodes;
        }
        if (null !== $this->softwareBlockPolicies) {
            $res['SoftwareBlockPolicies'] = null !== $this->softwareBlockPolicies ? $this->softwareBlockPolicies->toMap() : null;
        }
        if (null !== $this->softwareHardeningPolicies) {
            $res['SoftwareHardeningPolicies'] = null !== $this->softwareHardeningPolicies ? $this->softwareHardeningPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUninstallPolicies'])) {
            $model->appUninstallPolicies = appUninstallPolicies::fromMap($map['AppUninstallPolicies']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceRegistrationPolicies'])) {
            $model->deviceRegistrationPolicies = deviceRegistrationPolicies::fromMap($map['DeviceRegistrationPolicies']);
        }
        if (isset($map['DlpSendPolicies'])) {
            $model->dlpSendPolicies = dlpSendPolicies::fromMap($map['DlpSendPolicies']);
        }
        if (isset($map['DomainBlacklistPolicies'])) {
            $model->domainBlacklistPolicies = domainBlacklistPolicies::fromMap($map['DomainBlacklistPolicies']);
        }
        if (isset($map['DomainWhitelistPolicies'])) {
            $model->domainWhitelistPolicies = domainWhitelistPolicies::fromMap($map['DomainWhitelistPolicies']);
        }
        if (isset($map['EndpointHardeningPolicies'])) {
            $model->endpointHardeningPolicies = endpointHardeningPolicies::fromMap($map['EndpointHardeningPolicies']);
        }
        if (isset($map['PeripheraBlockPolicies'])) {
            $model->peripheraBlockPolicies = peripheraBlockPolicies::fromMap($map['PeripheraBlockPolicies']);
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessNodes'])) {
            if (!empty($map['ProcessNodes'])) {
                $model->processNodes = $map['ProcessNodes'];
            }
        }
        if (isset($map['SoftwareBlockPolicies'])) {
            $model->softwareBlockPolicies = softwareBlockPolicies::fromMap($map['SoftwareBlockPolicies']);
        }
        if (isset($map['SoftwareHardeningPolicies'])) {
            $model->softwareHardeningPolicies = softwareHardeningPolicies::fromMap($map['SoftwareHardeningPolicies']);
        }

        return $model;
    }
}
