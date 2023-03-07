<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClientRequest extends Model
{
    /**
     * @description The version to which the client will be upgraded. By default, the client is upgraded to the latest version. You can call the [ListCurrentClientVersion](~~87223~~) operation to query the latest version number of the Elastic High Performance Computing (E-HPC) client.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clientVersion' => 'ClientVersion',
        'clusterId'     => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClientRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
