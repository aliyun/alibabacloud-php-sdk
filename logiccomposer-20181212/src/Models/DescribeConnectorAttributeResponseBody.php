<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponseBody\capabilities;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponseBody\icon;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponseBody\stepResult;
use AlibabaCloud\Tea\Model;

class DescribeConnectorAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @var string
     */
    public $brandColor;

    /**
     * @var stepResult
     */
    public $stepResult;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $connectorId;
    protected $_name = [
        'description'  => 'Description',
        'category'     => 'Category',
        'requestId'    => 'RequestId',
        'capabilities' => 'Capabilities',
        'fullName'     => 'FullName',
        'displayName'  => 'DisplayName',
        'regionId'     => 'RegionId',
        'icon'         => 'Icon',
        'brandColor'   => 'BrandColor',
        'stepResult'   => 'StepResult',
        'name'         => 'Name',
        'connectorId'  => 'ConnectorId',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toMap() : null;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toMap() : null;
        }
        if (null !== $this->brandColor) {
            $res['BrandColor'] = $this->brandColor;
        }
        if (null !== $this->stepResult) {
            $res['StepResult'] = null !== $this->stepResult ? $this->stepResult->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectorAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['Capabilities']);
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }
        if (isset($map['BrandColor'])) {
            $model->brandColor = $map['BrandColor'];
        }
        if (isset($map['StepResult'])) {
            $model->stepResult = stepResult::fromMap($map['StepResult']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        return $model;
    }
}
