<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDlpOutboundLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDlpOutboundLogsResponseBody\logs\matchedDicts;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDlpOutboundLogsResponseBody\logs\matchedPolicies;

class logs extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $devFilePath;

    /**
     * @var string
     */
    public $deviceTag;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $dlpStorageConfigId;

    /**
     * @var string
     */
    public $dlpStorageType;

    /**
     * @var string
     */
    public $dstAddr;

    /**
     * @var string
     */
    public $fileOrigin;

    /**
     * @var string
     */
    public $fileOriginHost;

    /**
     * @var string
     */
    public $fileOriginReferrer;

    /**
     * @var string
     */
    public $filePreview;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var matchedDicts
     */
    public $matchedDicts;

    /**
     * @var matchedPolicies[]
     */
    public $matchedPolicies;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $policyAction;

    /**
     * @var string[]
     */
    public $policyName;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $processNameDesc;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $screenFilePath;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $srcFileName;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'category' => 'Category',
        'channelId' => 'ChannelId',
        'channelType' => 'ChannelType',
        'department' => 'Department',
        'devFilePath' => 'DevFilePath',
        'deviceTag' => 'DeviceTag',
        'deviceType' => 'DeviceType',
        'dlpStorageConfigId' => 'DlpStorageConfigId',
        'dlpStorageType' => 'DlpStorageType',
        'dstAddr' => 'DstAddr',
        'fileOrigin' => 'FileOrigin',
        'fileOriginHost' => 'FileOriginHost',
        'fileOriginReferrer' => 'FileOriginReferrer',
        'filePreview' => 'FilePreview',
        'format' => 'Format',
        'groupInfo' => 'GroupInfo',
        'hostName' => 'HostName',
        'logId' => 'LogId',
        'matchedDicts' => 'MatchedDicts',
        'matchedPolicies' => 'MatchedPolicies',
        'ossFileName' => 'OssFileName',
        'policyAction' => 'PolicyAction',
        'policyName' => 'PolicyName',
        'processName' => 'ProcessName',
        'processNameDesc' => 'ProcessNameDesc',
        'riskLevel' => 'RiskLevel',
        'scene' => 'Scene',
        'screenFilePath' => 'ScreenFilePath',
        'size' => 'Size',
        'srcFileName' => 'SrcFileName',
        'srcIp' => 'SrcIp',
        'startTime' => 'StartTime',
        'uploadTime' => 'UploadTime',
        'user' => 'User',
    ];

    public function validate()
    {
        if (null !== $this->matchedDicts) {
            $this->matchedDicts->validate();
        }
        if (\is_array($this->matchedPolicies)) {
            Model::validateArray($this->matchedPolicies);
        }
        if (\is_array($this->policyName)) {
            Model::validateArray($this->policyName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->devFilePath) {
            $res['DevFilePath'] = $this->devFilePath;
        }

        if (null !== $this->deviceTag) {
            $res['DeviceTag'] = $this->deviceTag;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->dlpStorageConfigId) {
            $res['DlpStorageConfigId'] = $this->dlpStorageConfigId;
        }

        if (null !== $this->dlpStorageType) {
            $res['DlpStorageType'] = $this->dlpStorageType;
        }

        if (null !== $this->dstAddr) {
            $res['DstAddr'] = $this->dstAddr;
        }

        if (null !== $this->fileOrigin) {
            $res['FileOrigin'] = $this->fileOrigin;
        }

        if (null !== $this->fileOriginHost) {
            $res['FileOriginHost'] = $this->fileOriginHost;
        }

        if (null !== $this->fileOriginReferrer) {
            $res['FileOriginReferrer'] = $this->fileOriginReferrer;
        }

        if (null !== $this->filePreview) {
            $res['FilePreview'] = $this->filePreview;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        if (null !== $this->matchedDicts) {
            $res['MatchedDicts'] = null !== $this->matchedDicts ? $this->matchedDicts->toArray($noStream) : $this->matchedDicts;
        }

        if (null !== $this->matchedPolicies) {
            if (\is_array($this->matchedPolicies)) {
                $res['MatchedPolicies'] = [];
                $n1 = 0;
                foreach ($this->matchedPolicies as $item1) {
                    $res['MatchedPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }

        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }

        if (null !== $this->policyName) {
            if (\is_array($this->policyName)) {
                $res['PolicyName'] = [];
                $n1 = 0;
                foreach ($this->policyName as $item1) {
                    $res['PolicyName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processNameDesc) {
            $res['ProcessNameDesc'] = $this->processNameDesc;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->screenFilePath) {
            $res['ScreenFilePath'] = $this->screenFilePath;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->srcFileName) {
            $res['SrcFileName'] = $this->srcFileName;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DevFilePath'])) {
            $model->devFilePath = $map['DevFilePath'];
        }

        if (isset($map['DeviceTag'])) {
            $model->deviceTag = $map['DeviceTag'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['DlpStorageConfigId'])) {
            $model->dlpStorageConfigId = $map['DlpStorageConfigId'];
        }

        if (isset($map['DlpStorageType'])) {
            $model->dlpStorageType = $map['DlpStorageType'];
        }

        if (isset($map['DstAddr'])) {
            $model->dstAddr = $map['DstAddr'];
        }

        if (isset($map['FileOrigin'])) {
            $model->fileOrigin = $map['FileOrigin'];
        }

        if (isset($map['FileOriginHost'])) {
            $model->fileOriginHost = $map['FileOriginHost'];
        }

        if (isset($map['FileOriginReferrer'])) {
            $model->fileOriginReferrer = $map['FileOriginReferrer'];
        }

        if (isset($map['FilePreview'])) {
            $model->filePreview = $map['FilePreview'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        if (isset($map['MatchedDicts'])) {
            $model->matchedDicts = matchedDicts::fromMap($map['MatchedDicts']);
        }

        if (isset($map['MatchedPolicies'])) {
            if (!empty($map['MatchedPolicies'])) {
                $model->matchedPolicies = [];
                $n1 = 0;
                foreach ($map['MatchedPolicies'] as $item1) {
                    $model->matchedPolicies[$n1] = matchedPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }

        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }

        if (isset($map['PolicyName'])) {
            if (!empty($map['PolicyName'])) {
                $model->policyName = [];
                $n1 = 0;
                foreach ($map['PolicyName'] as $item1) {
                    $model->policyName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessNameDesc'])) {
            $model->processNameDesc = $map['ProcessNameDesc'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['ScreenFilePath'])) {
            $model->screenFilePath = $map['ScreenFilePath'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SrcFileName'])) {
            $model->srcFileName = $map['SrcFileName'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
