<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset;

use AlibabaCloud\Tea\Model;

class egressEndpoints extends Model
{
    /**
     * @description The name of the packaging configuration.
     *
     * @example hls_3s
     *
     * @var string
     */
    public $configurationName;

    /**
     * @description The asset status. Valid values:
     *
     *   Queuing: The asset is waiting for packaging.
     *   Playable: The asset is packaged and playable.
     *   Failed: The asset fails to be packaged.
     *
     * @example Playable
     *
     * @var string
     */
    public $status;

    /**
     * @description The playback URL. If the asset fails to be packaged, no playback URL is returned.
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'configurationName' => 'ConfigurationName',
        'status' => 'Status',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
