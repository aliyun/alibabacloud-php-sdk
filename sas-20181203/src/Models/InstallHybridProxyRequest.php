<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class InstallHybridProxyRequest extends Model
{
    /**
     * @description The cluster name.
     *
     * @example proxy-test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The installation code.
     *
     * @example Z9c8SA
     *
     * @var string
     */
    public $installCode;

    /**
     * @description The UUIDs of the proxy servers.
     *
     * @var string[]
     */
    public $yundunUuids;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'installCode' => 'InstallCode',
        'yundunUuids' => 'YundunUuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->installCode) {
            $res['InstallCode'] = $this->installCode;
        }
        if (null !== $this->yundunUuids) {
            $res['YundunUuids'] = $this->yundunUuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallHybridProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['InstallCode'])) {
            $model->installCode = $map['InstallCode'];
        }
        if (isset($map['YundunUuids'])) {
            if (!empty($map['YundunUuids'])) {
                $model->yundunUuids = $map['YundunUuids'];
            }
        }

        return $model;
    }
}
