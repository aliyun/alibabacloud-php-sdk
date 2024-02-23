<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryVoiceFileAuditInfoRequest extends Model
{
    /**
     * @description The type of the voice file. Valid values:
     *
     *   **0** (default): the voice notification file.
     *   **2**: the recording file.
     *
     * @example 0
     *
     * @var int
     */
    public $businessType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the voice file. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications** or **Voice File Management**, and then click the **Voice Notification Files** tab to view the **voice ID**.
     *
     * > You can query up to 10 voice files each time. Separate the voice file names with commas (,).
     * @example 8501d2eb-efbb-471f-xxx8-****.wav
     *
     * @var string
     */
    public $voiceCodes;
    protected $_name = [
        'businessType'         => 'BusinessType',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'voiceCodes'           => 'VoiceCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->voiceCodes) {
            $res['VoiceCodes'] = $this->voiceCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryVoiceFileAuditInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VoiceCodes'])) {
            $model->voiceCodes = $map['VoiceCodes'];
        }

        return $model;
    }
}
