<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsAccessProfilesResponseBody\data;

use AlibabaCloud\Dara\Model;

class flashSmsAccessProfiles extends Model
{
    /**
     * @var string
     */
    public $accessProfile;

    /**
     * @var string
     */
    public $accessProfileId;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'accessProfile' => 'AccessProfile',
        'accessProfileId' => 'AccessProfileId',
        'createdTime' => 'CreatedTime',
        'providerId' => 'ProviderId',
        'providerName' => 'ProviderName',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessProfile) {
            $res['AccessProfile'] = $this->accessProfile;
        }

        if (null !== $this->accessProfileId) {
            $res['AccessProfileId'] = $this->accessProfileId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['AccessProfile'])) {
            $model->accessProfile = $map['AccessProfile'];
        }

        if (isset($map['AccessProfileId'])) {
            $model->accessProfileId = $map['AccessProfileId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
