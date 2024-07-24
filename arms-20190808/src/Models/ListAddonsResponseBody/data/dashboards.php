<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dashboards extends Model
{
    /**
     * @description The description of the dashboard.
     *
     * @example MySQL monitors the market information, monitoring the connection information, usage information and other indicators
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the dashboard.
     *
     * @example mysql-overview
     *
     * @var string
     */
    public $name;

    /**
     * @description The URL of the dashboard.
     *
     * @example http://xxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
