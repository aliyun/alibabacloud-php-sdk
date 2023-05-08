<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateAgentClientInstallRequest extends Model
{
    /**
     * @description The IDs of the servers on which you want to install the Security Center agent. Separate multiple IDs with commas (,).
     *
     * > You must specify at least one of the **InstanceIds** and **Uuids** parameters before you can call this operation.
     * @example i-uf6j8vq9l4r5ntht****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UUIDs of the servers on which you want to install the Security Center agent. Separate multiple UUIDs with commas (,).
     *
     * > You must specify at least one of the **InstanceIds** and **Uuids** parameters before you can call this operation.
     * @example 1587bedb-fdb4-48c4-9330-************
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'lang'        => 'Lang',
        'uuids'       => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAgentClientInstallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
