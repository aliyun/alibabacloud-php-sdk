<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the returned data.
     *
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @description The maximum number of connections.
     *
     * @example 50,000
     *
     * @var string
     */
    public $maxConnection;

    /**
     * @description The name of the instance type.
     *
     * @example Standard I
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum connections per second (CPS).
     *
     * @example 50,000
     *
     * @var string
     */
    public $newConnectionPerSecond;

    /**
     * @description The maximum queries per second (QPS).
     *
     * @example 50,000
     *
     * @var string
     */
    public $qps;

    /**
     * @description The instance type of the SLB instance.
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'id'                     => 'Id',
        'maxConnection'          => 'MaxConnection',
        'name'                   => 'Name',
        'newConnectionPerSecond' => 'NewConnectionPerSecond',
        'qps'                    => 'Qps',
        'spec'                   => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxConnection) {
            $res['MaxConnection'] = $this->maxConnection;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newConnectionPerSecond) {
            $res['NewConnectionPerSecond'] = $this->newConnectionPerSecond;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxConnection'])) {
            $model->maxConnection = $map['MaxConnection'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewConnectionPerSecond'])) {
            $model->newConnectionPerSecond = $map['NewConnectionPerSecond'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
