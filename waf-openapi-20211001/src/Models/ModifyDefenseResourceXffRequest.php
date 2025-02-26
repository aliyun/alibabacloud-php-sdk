<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceXffRequest\responseHeaders;

class ModifyDefenseResourceXffRequest extends Model
{
    /**
     * @var int
     */
    public $acwCookieStatus;
    /**
     * @var int
     */
    public $acwSecureStatus;
    /**
     * @var int
     */
    public $acwV3SecureStatus;
    /**
     * @var string[]
     */
    public $customHeaders;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resource;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var responseHeaders[]
     */
    public $responseHeaders;
    /**
     * @var int
     */
    public $xffStatus;
    protected $_name = [
        'acwCookieStatus'                => 'AcwCookieStatus',
        'acwSecureStatus'                => 'AcwSecureStatus',
        'acwV3SecureStatus'              => 'AcwV3SecureStatus',
        'customHeaders'                  => 'CustomHeaders',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resource'                       => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'responseHeaders'                => 'ResponseHeaders',
        'xffStatus'                      => 'XffStatus',
    ];

    public function validate()
    {
        if (\is_array($this->customHeaders)) {
            Model::validateArray($this->customHeaders);
        }
        if (\is_array($this->responseHeaders)) {
            Model::validateArray($this->responseHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acwCookieStatus) {
            $res['AcwCookieStatus'] = $this->acwCookieStatus;
        }

        if (null !== $this->acwSecureStatus) {
            $res['AcwSecureStatus'] = $this->acwSecureStatus;
        }

        if (null !== $this->acwV3SecureStatus) {
            $res['AcwV3SecureStatus'] = $this->acwV3SecureStatus;
        }

        if (null !== $this->customHeaders) {
            if (\is_array($this->customHeaders)) {
                $res['CustomHeaders'] = [];
                $n1                   = 0;
                foreach ($this->customHeaders as $item1) {
                    $res['CustomHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->responseHeaders) {
            if (\is_array($this->responseHeaders)) {
                $res['ResponseHeaders'] = [];
                $n1                     = 0;
                foreach ($this->responseHeaders as $item1) {
                    $res['ResponseHeaders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->xffStatus) {
            $res['XffStatus'] = $this->xffStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcwCookieStatus'])) {
            $model->acwCookieStatus = $map['AcwCookieStatus'];
        }

        if (isset($map['AcwSecureStatus'])) {
            $model->acwSecureStatus = $map['AcwSecureStatus'];
        }

        if (isset($map['AcwV3SecureStatus'])) {
            $model->acwV3SecureStatus = $map['AcwV3SecureStatus'];
        }

        if (isset($map['CustomHeaders'])) {
            if (!empty($map['CustomHeaders'])) {
                $model->customHeaders = [];
                $n1                   = 0;
                foreach ($map['CustomHeaders'] as $item1) {
                    $model->customHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['ResponseHeaders'])) {
            if (!empty($map['ResponseHeaders'])) {
                $model->responseHeaders = [];
                $n1                     = 0;
                foreach ($map['ResponseHeaders'] as $item1) {
                    $model->responseHeaders[$n1++] = responseHeaders::fromMap($item1);
                }
            }
        }

        if (isset($map['XffStatus'])) {
            $model->xffStatus = $map['XffStatus'];
        }

        return $model;
    }
}
