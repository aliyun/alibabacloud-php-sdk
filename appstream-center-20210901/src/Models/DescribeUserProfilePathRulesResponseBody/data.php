<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeUserProfilePathRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeUserProfilePathRulesResponseBody\data\rules;

class data extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupSetId;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @var string
     */
    public $remoteStoragePath;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var int
     */
    public $userProfileSize;

    /**
     * @var bool
     */
    public $userProfileSwitch;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupSetId' => 'AppInstanceGroupSetId',
        'domainId' => 'DomainId',
        'fileSystemId' => 'FileSystemId',
        'profileFollowSwitch' => 'ProfileFollowSwitch',
        'remoteStoragePath' => 'RemoteStoragePath',
        'ruleType' => 'RuleType',
        'rules' => 'Rules',
        'userProfileSize' => 'UserProfileSize',
        'userProfileSwitch' => 'UserProfileSwitch',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupSetId) {
            $res['AppInstanceGroupSetId'] = $this->appInstanceGroupSetId;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }

        if (null !== $this->remoteStoragePath) {
            $res['RemoteStoragePath'] = $this->remoteStoragePath;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userProfileSize) {
            $res['UserProfileSize'] = $this->userProfileSize;
        }

        if (null !== $this->userProfileSwitch) {
            $res['UserProfileSwitch'] = $this->userProfileSwitch;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupSetId'])) {
            $model->appInstanceGroupSetId = $map['AppInstanceGroupSetId'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }

        if (isset($map['RemoteStoragePath'])) {
            $model->remoteStoragePath = $map['RemoteStoragePath'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserProfileSize'])) {
            $model->userProfileSize = $map['UserProfileSize'];
        }

        if (isset($map['UserProfileSwitch'])) {
            $model->userProfileSwitch = $map['UserProfileSwitch'];
        }

        return $model;
    }
}
