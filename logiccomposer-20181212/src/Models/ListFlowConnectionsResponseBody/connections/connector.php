<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections\connector\connectionParameters;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections\connector\icon;
use AlibabaCloud\Tea\Model;

class connector extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $brandColor;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var connectionParameters
     */
    public $connectionParameters;
    protected $_name = [
        'displayName'          => 'DisplayName',
        'brandColor'           => 'BrandColor',
        'icon'                 => 'Icon',
        'name'                 => 'Name',
        'connectionParameters' => 'ConnectionParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->brandColor) {
            $res['BrandColor'] = $this->brandColor;
        }
        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->connectionParameters) {
            $res['ConnectionParameters'] = null !== $this->connectionParameters ? $this->connectionParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['BrandColor'])) {
            $model->brandColor = $map['BrandColor'];
        }
        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ConnectionParameters'])) {
            $model->connectionParameters = connectionParameters::fromMap($map['ConnectionParameters']);
        }

        return $model;
    }
}
