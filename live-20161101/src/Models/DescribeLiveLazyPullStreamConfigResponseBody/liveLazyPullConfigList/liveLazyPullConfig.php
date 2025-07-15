<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList;

use AlibabaCloud\Tea\Model;

class liveLazyPullConfig extends Model
{
    /**
     * @description The name of the application.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the application for back-to-origin stream pulling. If the application specified in the streaming URL is used, this parameter is left empty.
     *
     * @example livePullApp****
     *
     * @var string
     */
    public $pullAppName;

    /**
     * @description The parameters of back-to-origin stream pulling.
     *
     * @example k=v
     *
     * @var string
     */
    public $pullArgs;

    /**
     * @description The domain name for back-to-origin stream pulling.
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
     * @example RTMP
     *
     * @var string
     */
    public $pullProtocol;

    /**
     * @description Indicates whether stream pulling is triggered when the transcoded stream is played. Default value: **no**. Valid values:
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
        'pullAppName' => 'PullAppName',
        'pullArgs' => 'PullArgs',
        'pullDomainName' => 'PullDomainName',
        'pullProtocol' => 'PullProtocol',
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
        if (null !== $this->pullAppName) {
            $res['PullAppName'] = $this->pullAppName;
        }
        if (null !== $this->pullArgs) {
            $res['PullArgs'] = $this->pullArgs;
        }
        if (null !== $this->pullDomainName) {
            $res['PullDomainName'] = $this->pullDomainName;
        }
        if (null !== $this->pullProtocol) {
            $res['PullProtocol'] = $this->pullProtocol;
        }
        if (null !== $this->transcodeLazy) {
            $res['TranscodeLazy'] = $this->transcodeLazy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveLazyPullConfig
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
        if (isset($map['PullAppName'])) {
            $model->pullAppName = $map['PullAppName'];
        }
        if (isset($map['PullArgs'])) {
            $model->pullArgs = $map['PullArgs'];
        }
        if (isset($map['PullDomainName'])) {
            $model->pullDomainName = $map['PullDomainName'];
        }
        if (isset($map['PullProtocol'])) {
            $model->pullProtocol = $map['PullProtocol'];
        }
        if (isset($map['TranscodeLazy'])) {
            $model->transcodeLazy = $map['TranscodeLazy'];
        }

        return $model;
    }
}
