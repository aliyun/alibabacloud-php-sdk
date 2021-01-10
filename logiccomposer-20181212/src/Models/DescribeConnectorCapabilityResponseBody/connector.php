<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\connector\connectionParameters;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\connector\icon;
use AlibabaCloud\Tea\Model;

class connector extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $defaultPolicy;

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
    public $ramMap;

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
        'defaultPolicy'        => 'DefaultPolicy',
        'fullName'             => 'FullName',
        'icon'                 => 'Icon',
        'connectorId'          => 'ConnectorId',
        'regionId'             => 'RegionId',
        'ramMap'               => 'RamMap',
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
        if (null !== $this->defaultPolicy) {
            $res['DefaultPolicy'] = $this->defaultPolicy;
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
        if (null !== $this->ramMap) {
            $res['RamMap'] = $this->ramMap;
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
     * @return connector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['DefaultPolicy'])) {
            if (!empty($map['DefaultPolicy'])) {
                $model->defaultPolicy = $map['DefaultPolicy'];
            }
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
        if (isset($map['RamMap'])) {
            $model->ramMap = $map['RamMap'];
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
