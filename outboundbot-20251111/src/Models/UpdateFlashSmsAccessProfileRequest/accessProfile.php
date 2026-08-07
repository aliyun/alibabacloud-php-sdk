<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateFlashSmsAccessProfileRequest\accessProfile\dySmsAccessProfiles;

class accessProfile extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $aesKey;

    /**
     * @var string
     */
    public $apiAccount;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiPassword;

    /**
     * @var string
     */
    public $capAppId;

    /**
     * @var dySmsAccessProfiles[]
     */
    public $dySmsAccessProfiles;

    /**
     * @var string
     */
    public $extno;

    /**
     * @var string
     */
    public $managementPassword;

    /**
     * @var string
     */
    public $managementSubUserId;

    /**
     * @var string
     */
    public $managementUsername;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $pwd;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'account' => 'Account',
        'aesKey' => 'AesKey',
        'apiAccount' => 'ApiAccount',
        'apiId' => 'ApiId',
        'apiKey' => 'ApiKey',
        'apiPassword' => 'ApiPassword',
        'capAppId' => 'CapAppId',
        'dySmsAccessProfiles' => 'DySmsAccessProfiles',
        'extno' => 'Extno',
        'managementPassword' => 'ManagementPassword',
        'managementSubUserId' => 'ManagementSubUserId',
        'managementUsername' => 'ManagementUsername',
        'password' => 'Password',
        'pwd' => 'Pwd',
        'user' => 'User',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->dySmsAccessProfiles)) {
            Model::validateArray($this->dySmsAccessProfiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->aesKey) {
            $res['AesKey'] = $this->aesKey;
        }

        if (null !== $this->apiAccount) {
            $res['ApiAccount'] = $this->apiAccount;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->apiPassword) {
            $res['ApiPassword'] = $this->apiPassword;
        }

        if (null !== $this->capAppId) {
            $res['CapAppId'] = $this->capAppId;
        }

        if (null !== $this->dySmsAccessProfiles) {
            if (\is_array($this->dySmsAccessProfiles)) {
                $res['DySmsAccessProfiles'] = [];
                $n1 = 0;
                foreach ($this->dySmsAccessProfiles as $item1) {
                    $res['DySmsAccessProfiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extno) {
            $res['Extno'] = $this->extno;
        }

        if (null !== $this->managementPassword) {
            $res['ManagementPassword'] = $this->managementPassword;
        }

        if (null !== $this->managementSubUserId) {
            $res['ManagementSubUserId'] = $this->managementSubUserId;
        }

        if (null !== $this->managementUsername) {
            $res['ManagementUsername'] = $this->managementUsername;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->pwd) {
            $res['Pwd'] = $this->pwd;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['AesKey'])) {
            $model->aesKey = $map['AesKey'];
        }

        if (isset($map['ApiAccount'])) {
            $model->apiAccount = $map['ApiAccount'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ApiPassword'])) {
            $model->apiPassword = $map['ApiPassword'];
        }

        if (isset($map['CapAppId'])) {
            $model->capAppId = $map['CapAppId'];
        }

        if (isset($map['DySmsAccessProfiles'])) {
            if (!empty($map['DySmsAccessProfiles'])) {
                $model->dySmsAccessProfiles = [];
                $n1 = 0;
                foreach ($map['DySmsAccessProfiles'] as $item1) {
                    $model->dySmsAccessProfiles[$n1] = dySmsAccessProfiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Extno'])) {
            $model->extno = $map['Extno'];
        }

        if (isset($map['ManagementPassword'])) {
            $model->managementPassword = $map['ManagementPassword'];
        }

        if (isset($map['ManagementSubUserId'])) {
            $model->managementSubUserId = $map['ManagementSubUserId'];
        }

        if (isset($map['ManagementUsername'])) {
            $model->managementUsername = $map['ManagementUsername'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Pwd'])) {
            $model->pwd = $map['Pwd'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
