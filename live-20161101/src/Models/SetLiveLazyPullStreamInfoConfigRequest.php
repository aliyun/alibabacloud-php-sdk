<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveLazyPullStreamInfoConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * >  If you want to configure triggered stream pulling for all applications, set the value to **ali_all_app**.
     *
     * This parameter is required.
     *
     * @example ali_all_app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the application for back-to-origin stream pulling.
     *
     * >  If you want to use the application specified in the streaming URL, leave this parameter empty.
     *
     * @example livePullApp****
     *
     * @var string
     */
    public $pullAppName;

    /**
     * @description The origin server address of the live stream. Separate multiple addresses with semicolons (;).
     *
     * This parameter is required.
     *
     * @example guide.aliyundoc.com
     *
     * @var string
     */
    public $pullDomainName;

    /**
     * @description The protocol for back-to-origin stream pulling. Valid values:
     *
     *   **rtmp**
     *   **httpflv**
     *   **hls**
     *
     * This parameter is required.
     *
     * @example rtmp
     *
     * @var string
     */
    public $pullProtocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to trigger stream pulling when the transcoded stream is played. The default value is **no**. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $transcodeLazy;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'pullAppName' => 'PullAppName',
        'pullDomainName' => 'PullDomainName',
        'pullProtocol' => 'PullProtocol',
        'regionId' => 'RegionId',
        'transcodeLazy' => 'TranscodeLazy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pullAppName) {
            $res['PullAppName'] = $this->pullAppName;
        }
        if (null !== $this->pullDomainName) {
            $res['PullDomainName'] = $this->pullDomainName;
        }
        if (null !== $this->pullProtocol) {
            $res['PullProtocol'] = $this->pullProtocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->transcodeLazy) {
            $res['TranscodeLazy'] = $this->transcodeLazy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveLazyPullStreamInfoConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PullAppName'])) {
            $model->pullAppName = $map['PullAppName'];
        }
        if (isset($map['PullDomainName'])) {
            $model->pullDomainName = $map['PullDomainName'];
        }
        if (isset($map['PullProtocol'])) {
            $model->pullProtocol = $map['PullProtocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TranscodeLazy'])) {
            $model->transcodeLazy = $map['TranscodeLazy'];
        }

        return $model;
    }
}
