<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class InstallSoftwareRequest extends Model
{
    /**
     * @description The name of the software that you want to install.
     *
     * You can call the [ListSoftwares](~~87216~~) operation to query the software that can be installed.
     * @example ABYSS_2.1.5
     *
     * @var string
     */
    public $application;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'application' => 'Application',
        'clusterId'   => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallSoftwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
