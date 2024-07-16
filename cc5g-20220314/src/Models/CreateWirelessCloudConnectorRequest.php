<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorRequest\netLinks;
use AlibabaCloud\Tea\Model;

class CreateWirelessCloudConnectorRequest extends Model
{
    /**
     * @example Business
     *
     * @var string
     */
    public $businessType;

    /**
     * @example TF-******-1633255280-43c94bf7-2dd3-4c14-8
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example unicom
     *
     * @var string
     */
    public $ISP;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var netLinks[]
     */
    public $netLinks;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $useCase;
    protected $_name = [
        'businessType' => 'BusinessType',
        'clientToken'  => 'ClientToken',
        'description'  => 'Description',
        'dryRun'       => 'DryRun',
        'ISP'          => 'ISP',
        'name'         => 'Name',
        'netLinks'     => 'NetLinks',
        'regionId'     => 'RegionId',
        'useCase'      => 'UseCase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netLinks) {
            $res['NetLinks'] = [];
            if (null !== $this->netLinks && \is_array($this->netLinks)) {
                $n = 0;
                foreach ($this->netLinks as $item) {
                    $res['NetLinks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->useCase) {
            $res['UseCase'] = $this->useCase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWirelessCloudConnectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetLinks'])) {
            if (!empty($map['NetLinks'])) {
                $model->netLinks = [];
                $n               = 0;
                foreach ($map['NetLinks'] as $item) {
                    $model->netLinks[$n++] = null !== $item ? netLinks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UseCase'])) {
            $model->useCase = $map['UseCase'];
        }

        return $model;
    }
}
