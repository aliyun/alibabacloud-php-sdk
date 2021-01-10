<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsResponseBody\connectors\connectionParameters;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsResponseBody\connectors\icon;
use AlibabaCloud\Tea\Model;

class connectors extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @var string
     */
    public $parentConnector;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $brandColor;

    /**
     * @var string
     */
    public $category;

    /**
     * @var connectionParameters
     */
    public $connectionParameters;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName'          => 'DisplayName',
        'capabilities'         => 'Capabilities',
        'parentConnector'      => 'ParentConnector',
        'fullName'             => 'FullName',
        'icon'                 => 'Icon',
        'connectorId'          => 'ConnectorId',
        'regionId'             => 'RegionId',
        'description'          => 'Description',
        'brandColor'           => 'BrandColor',
        'category'             => 'Category',
        'connectionParameters' => 'ConnectionParameters',
        'name'                 => 'Name',
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
        if (null !== $this->capabilities) {
            $res['Capabilities'] = $this->capabilities;
        }
        if (null !== $this->parentConnector) {
            $res['ParentConnector'] = $this->parentConnector;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toMap() : null;
        }
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->brandColor) {
            $res['BrandColor'] = $this->brandColor;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->connectionParameters) {
            $res['ConnectionParameters'] = null !== $this->connectionParameters ? $this->connectionParameters->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = $map['Capabilities'];
            }
        }
        if (isset($map['ParentConnector'])) {
            $model->parentConnector = $map['ParentConnector'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BrandColor'])) {
            $model->brandColor = $map['BrandColor'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConnectionParameters'])) {
            $model->connectionParameters = connectionParameters::fromMap($map['ConnectionParameters']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
