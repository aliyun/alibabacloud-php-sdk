<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceRequest extends Model
{
    /**
     * @description The error code that is returned.
     *
     * @example xxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the request.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The operation that you want to perform. Set the value to **DeleteInstance**.
     *
     * @example testSid
     *
     * @var string
     */
    public $sid;

    /**
     * @description The system ID (SID) of the database instance. You can call the [ListInstances](~~141936~~) or [GetInstance](~~141567~~) operation to obtain the SID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
        'sid'  => 'Sid',
        'tid'  => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
