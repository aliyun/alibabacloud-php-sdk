<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetAppMessageQueueRouteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example hkhon1po62@54e1f42f37cd65a
     *
     * @var string
     */
    public $appId;

    /**
     * @description Indicates whether the canary release for messaging feature is enabled.
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The side for message filtering when the canary release for messaging feature is enabled.
     *
     * @example Server
     *
     * @var string
     */
    public $filterSide;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The tags used to ignore message consumption for nodes in untagged environments.
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'appId'      => 'AppId',
        'enable'     => 'Enable',
        'filterSide' => 'FilterSide',
        'region'     => 'Region',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->filterSide) {
            $res['FilterSide'] = $this->filterSide;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FilterSide'])) {
            $model->filterSide = $map['FilterSide'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
