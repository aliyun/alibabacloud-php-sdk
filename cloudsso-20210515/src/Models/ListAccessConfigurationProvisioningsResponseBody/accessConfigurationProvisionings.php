<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponseBody;

use AlibabaCloud\Dara\Model;

class accessConfigurationProvisionings extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $RAMPolicyNames;

    /**
     * @var string
     */
    public $RAMRoleName;

    /**
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetPathName;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime' => 'CreateTime',
        'RAMPolicyNames' => 'RAMPolicyNames',
        'RAMRoleName' => 'RAMRoleName',
        'SAMLProviderName' => 'SAMLProviderName',
        'status' => 'Status',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetPath' => 'TargetPath',
        'targetPathName' => 'TargetPathName',
        'targetType' => 'TargetType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->RAMPolicyNames)) {
            Model::validateArray($this->RAMPolicyNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }

        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->RAMPolicyNames) {
            if (\is_array($this->RAMPolicyNames)) {
                $res['RAMPolicyNames'] = [];
                $n1 = 0;
                foreach ($this->RAMPolicyNames as $item1) {
                    $res['RAMPolicyNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->RAMRoleName) {
            $res['RAMRoleName'] = $this->RAMRoleName;
        }

        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }

        if (null !== $this->targetPathName) {
            $res['TargetPathName'] = $this->targetPathName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }

        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['RAMPolicyNames'])) {
            if (!empty($map['RAMPolicyNames'])) {
                $model->RAMPolicyNames = [];
                $n1 = 0;
                foreach ($map['RAMPolicyNames'] as $item1) {
                    $model->RAMPolicyNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RAMRoleName'])) {
            $model->RAMRoleName = $map['RAMRoleName'];
        }

        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        if (isset($map['TargetPathName'])) {
            $model->targetPathName = $map['TargetPathName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
