<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DettachAssetGroupToInstanceRequest;

use AlibabaCloud\Tea\Model;

class assetGroupList extends Model
{
    /**
     * @description The ID of the asset. If the asset is a Web Application Firewall (WAF) instance, specify the ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_v2_public_cn-lbj382l****
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the asset.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **waf**: WAF instance
     *   **ga**: Global Accelerator (GA) instance
     *
     * This parameter is required.
     * @example waf
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'   => 'Name',
        'region' => 'Region',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
