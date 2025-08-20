<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\appUninstallPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\deviceRegistrationPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\dlpSendPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\domainBlacklistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\domainWhitelistPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\endpointHardeningPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\peripheraBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\processNodes;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\softwareBlockPolicies;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process\softwareHardeningPolicies;

class process extends Model
{
    /**
     * @var appUninstallPolicies
     */
    public $appUninstallPolicies;

    /**
     * @var int
     */
    public $approvalType;

    /**
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
     * @var string
     */
    public $eventLabel;

    /**
     * @var string
     */
    public $externalConfig;

    /**
     * @var peripheraBlockPolicies
     */
    public $peripheraBlockPolicies;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var processNodes[][]
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
        'approvalType' => 'ApprovalType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'deviceRegistrationPolicies' => 'DeviceRegistrationPolicies',
        'dlpSendPolicies' => 'DlpSendPolicies',
        'domainBlacklistPolicies' => 'DomainBlacklistPolicies',
        'domainWhitelistPolicies' => 'DomainWhitelistPolicies',
        'endpointHardeningPolicies' => 'EndpointHardeningPolicies',
        'eventLabel' => 'EventLabel',
        'externalConfig' => 'ExternalConfig',
        'peripheraBlockPolicies' => 'PeripheraBlockPolicies',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processNodes' => 'ProcessNodes',
        'softwareBlockPolicies' => 'SoftwareBlockPolicies',
        'softwareHardeningPolicies' => 'SoftwareHardeningPolicies',
    ];

    public function validate()
    {
        if (null !== $this->appUninstallPolicies) {
            $this->appUninstallPolicies->validate();
        }
        if (null !== $this->deviceRegistrationPolicies) {
            $this->deviceRegistrationPolicies->validate();
        }
        if (null !== $this->dlpSendPolicies) {
            $this->dlpSendPolicies->validate();
        }
        if (null !== $this->domainBlacklistPolicies) {
            $this->domainBlacklistPolicies->validate();
        }
        if (null !== $this->domainWhitelistPolicies) {
            $this->domainWhitelistPolicies->validate();
        }
        if (null !== $this->endpointHardeningPolicies) {
            $this->endpointHardeningPolicies->validate();
        }
        if (null !== $this->peripheraBlockPolicies) {
            $this->peripheraBlockPolicies->validate();
        }
        if (\is_array($this->processNodes)) {
            Model::validateArray($this->processNodes);
        }
        if (null !== $this->softwareBlockPolicies) {
            $this->softwareBlockPolicies->validate();
        }
        if (null !== $this->softwareHardeningPolicies) {
            $this->softwareHardeningPolicies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUninstallPolicies) {
            $res['AppUninstallPolicies'] = null !== $this->appUninstallPolicies ? $this->appUninstallPolicies->toArray($noStream) : $this->appUninstallPolicies;
        }

        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->deviceRegistrationPolicies) {
            $res['DeviceRegistrationPolicies'] = null !== $this->deviceRegistrationPolicies ? $this->deviceRegistrationPolicies->toArray($noStream) : $this->deviceRegistrationPolicies;
        }

        if (null !== $this->dlpSendPolicies) {
            $res['DlpSendPolicies'] = null !== $this->dlpSendPolicies ? $this->dlpSendPolicies->toArray($noStream) : $this->dlpSendPolicies;
        }

        if (null !== $this->domainBlacklistPolicies) {
            $res['DomainBlacklistPolicies'] = null !== $this->domainBlacklistPolicies ? $this->domainBlacklistPolicies->toArray($noStream) : $this->domainBlacklistPolicies;
        }

        if (null !== $this->domainWhitelistPolicies) {
            $res['DomainWhitelistPolicies'] = null !== $this->domainWhitelistPolicies ? $this->domainWhitelistPolicies->toArray($noStream) : $this->domainWhitelistPolicies;
        }

        if (null !== $this->endpointHardeningPolicies) {
            $res['EndpointHardeningPolicies'] = null !== $this->endpointHardeningPolicies ? $this->endpointHardeningPolicies->toArray($noStream) : $this->endpointHardeningPolicies;
        }

        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
        }

        if (null !== $this->externalConfig) {
            $res['ExternalConfig'] = $this->externalConfig;
        }

        if (null !== $this->peripheraBlockPolicies) {
            $res['PeripheraBlockPolicies'] = null !== $this->peripheraBlockPolicies ? $this->peripheraBlockPolicies->toArray($noStream) : $this->peripheraBlockPolicies;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processNodes) {
            if (\is_array($this->processNodes)) {
                $res['ProcessNodes'] = [];
                $n1 = 0;
                foreach ($this->processNodes as $item1) {
                    if (\is_array($item1)) {
                        $res['ProcessNodes'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ProcessNodes'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->softwareBlockPolicies) {
            $res['SoftwareBlockPolicies'] = null !== $this->softwareBlockPolicies ? $this->softwareBlockPolicies->toArray($noStream) : $this->softwareBlockPolicies;
        }

        if (null !== $this->softwareHardeningPolicies) {
            $res['SoftwareHardeningPolicies'] = null !== $this->softwareHardeningPolicies ? $this->softwareHardeningPolicies->toArray($noStream) : $this->softwareHardeningPolicies;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUninstallPolicies'])) {
            $model->appUninstallPolicies = appUninstallPolicies::fromMap($map['AppUninstallPolicies']);
        }

        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
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

        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }

        if (isset($map['ExternalConfig'])) {
            $model->externalConfig = $map['ExternalConfig'];
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
                $model->processNodes = [];
                $n1 = 0;
                foreach ($map['ProcessNodes'] as $item1) {
                    if (!empty($item1)) {
                        $model->processNodes[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->processNodes[$n1][$n2] = processNodes::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
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
