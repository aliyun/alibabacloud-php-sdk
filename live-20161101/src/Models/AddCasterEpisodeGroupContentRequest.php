<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterEpisodeGroupContentRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate a token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * This parameter is required.
     *
     * @example 8751ad99-2ddb-4aac-ad44-84b21102****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The information about the episode list. The value is a JSON string. Use upper camel case for fields of the string. This parameter contains the following fields:
     *
     *   **CallbackUrl**: the callback URL.
     *
     *   **SideOutputUrl**: the custom standby URL.
     *
     *   **RepeatNum**: the number of times the episode list repeats after the first playback is complete. A value of 0 indicates that the episode list is played only once. A value of -1 indicates that the episode list is played in loop mode.
     *
     *   **DomainName**: the domain name.
     *
     *   **StartTime**: the time when the episode list starts to play. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     *   **Items**: the information about the episode list. It is an array of ItemName and VodUrl.
     *
     *   **ItemName**: the name of the episode.
     *   **VodUrl**: the URL of the VOD file. This field takes effect only when the video resource is a video file that is not from the media library. The video file must be in the MP4, FLV, or TS format.
     *
     * This parameter is required.
     *
     * @example CallbackUrl
     *
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'content' => 'Content',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterEpisodeGroupContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
