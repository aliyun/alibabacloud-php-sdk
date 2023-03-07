<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsRequest\postInstallScripts;
use AlibabaCloud\Tea\Model;

class SetPostScriptsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-sh-EnjshUxn
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var postInstallScripts[]
     */
    public $postInstallScripts;

    /**
     * @description The ID of the region where the cluster resides. You can call the [ListRegions](~~188593~~) operation to query the latest region list.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'postInstallScripts' => 'PostInstallScripts',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->postInstallScripts) {
            $res['PostInstallScripts'] = [];
            if (null !== $this->postInstallScripts && \is_array($this->postInstallScripts)) {
                $n = 0;
                foreach ($this->postInstallScripts as $item) {
                    $res['PostInstallScripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPostScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PostInstallScripts'])) {
            if (!empty($map['PostInstallScripts'])) {
                $model->postInstallScripts = [];
                $n                         = 0;
                foreach ($map['PostInstallScripts'] as $item) {
                    $model->postInstallScripts[$n++] = null !== $item ? postInstallScripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
