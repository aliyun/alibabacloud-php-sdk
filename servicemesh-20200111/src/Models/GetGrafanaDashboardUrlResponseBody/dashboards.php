<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetGrafanaDashboardUrlResponseBody;

use AlibabaCloud\Tea\Model;

class dashboards extends Model
{
    /**
     * @description The name of the dashboard.
     *
     * @example Cloud ASM Istio Http Gateway
     *
     * @var string
     */
    public $title;

    /**
     * @description The URL of the dashboard.
     *
     * @example https://g.console.aliyun.com/d/181863583797****-14651340-200-2/alibaba-cloud-mesh-service?orgId=32****&refresh=60s
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'title' => 'Title',
        'url'   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
