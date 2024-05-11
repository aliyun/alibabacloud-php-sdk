<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateRetcodeAppRequest extends Model
{
    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. You can obtain the resource group ID in the **Resource Management** console.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the application that is monitored by Browser Monitoring.
     *
     * This parameter is required.
     * @example SdkTest
     *
     * @var string
     */
    public $retcodeAppName;

    /**
     * @description The site type.
     *
     * This parameter is required.
     * @example mini_dd
     *
     * @var string
     */
    public $retcodeAppType;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'retcodeAppName'  => 'RetcodeAppName',
        'retcodeAppType'  => 'RetcodeAppType',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retcodeAppName) {
            $res['RetcodeAppName'] = $this->retcodeAppName;
        }
        if (null !== $this->retcodeAppType) {
            $res['RetcodeAppType'] = $this->retcodeAppType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetcodeAppName'])) {
            $model->retcodeAppName = $map['RetcodeAppName'];
        }
        if (isset($map['RetcodeAppType'])) {
            $model->retcodeAppType = $map['RetcodeAppType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
