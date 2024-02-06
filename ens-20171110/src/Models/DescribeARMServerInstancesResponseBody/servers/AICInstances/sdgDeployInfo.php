<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;

use AlibabaCloud\Tea\Model;

class sdgDeployInfo extends Model
{
    /**
     * @description The ID of the SDG.
     *
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $SDGId;

    /**
     * @description The deployment status of the SDG. Valid values:
     *
     *   **sdg_deploying**
     *   **failed**
     *   **success**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'SDGId'  => 'SDGId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sdgDeployInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
