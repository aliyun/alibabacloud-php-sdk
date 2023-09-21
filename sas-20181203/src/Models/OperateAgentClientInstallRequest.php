<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateAgentClientInstallRequest extends Model
{
    /**
     * @description The IDs of the servers on which you want to install the Security Center agent. Separate multiple IDs with commas (,).
     *
     * > : You must specify at least one of **InstanceIds** and **Uuids**. If you specify **InstanceIds**, you must also specify **Region** and **Os**.
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
     * @description The operating system of the servers. Valid values:
     *
     *   **linux**
     *   **windows**
     *
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @description The region where the servers reside. Valid values include the following regions:
     *
     *   cn-hangzhou: China (Hangzhou)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *   cn-zhangjiakou: China (Zhangjiakou)
     *   cn-shenzhen: China (Shenzhen)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

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
        'os'          => 'Os',
        'region'      => 'Region',
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
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
