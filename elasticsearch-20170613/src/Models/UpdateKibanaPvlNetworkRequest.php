<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateKibanaPvlNetworkRequest extends Model
{
    /**
     * @example es-cn-27a3mul6l00***-kibana
     *
     * @var string
     */
    public $endpointName;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @description This parameter is required.
     *
     * @example es-cn-27a3mul6l0***-kibana-internal
     *
     * @var string
     */
    public $pvlId;
    protected $_name = [
        'endpointName'   => 'endpointName',
        'securityGroups' => 'securityGroups',
        'pvlId'          => 'pvlId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }
        if (null !== $this->securityGroups) {
            $res['securityGroups'] = $this->securityGroups;
        }
        if (null !== $this->pvlId) {
            $res['pvlId'] = $this->pvlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKibanaPvlNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }
        if (isset($map['securityGroups'])) {
            if (!empty($map['securityGroups'])) {
                $model->securityGroups = $map['securityGroups'];
            }
        }
        if (isset($map['pvlId'])) {
            $model->pvlId = $map['pvlId'];
        }

        return $model;
    }
}
