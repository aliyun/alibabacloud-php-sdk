<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The instance ID.
     *
     * @example gw-co370icmjeu****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The dashboard name.
     *
     * @example PLUGIN
     *
     * @var string
     */
    public $name;

    /**
     * @description The dashboard title.
     *
     * @example APIG Plugin
     *
     * @var string
     */
    public $title;

    /**
     * @description The dashboard URL.
     *
     * @example https://sls.console.aliyun.com/lognext/project/xxxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'name' => 'name',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
