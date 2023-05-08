<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyPortDetailRequest extends Model
{
    /**
     * @description The network protocol that is used by the listening port.
     *
     * @example 0.0.XX.XX
     *
     * @var string
     */
    public $bindIp;

    /**
     * @description The name of the server process.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The listening port.
     *
     * @example 1
     *
     * @var string
     */
    public $extend;

    /**
     * @description 50d213b4-3a35-427a-b8a5-04b0c7e1****
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The public IP address of the server.
     *
     * @example 22
     *
     * @var string
     */
    public $port;

    /**
     * @description The IP address that is bound to the listening port.
     *
     * @example sshd
     *
     * @var string
     */
    public $procName;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The listening port of the server.
     *
     * @example 50d213b4-3a35-427a-b8a5-04b0c7e1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'bindIp'      => 'BindIp',
        'currentPage' => 'CurrentPage',
        'extend'      => 'Extend',
        'pageSize'    => 'PageSize',
        'port'        => 'Port',
        'procName'    => 'ProcName',
        'remark'      => 'Remark',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindIp) {
            $res['BindIp'] = $this->bindIp;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->procName) {
            $res['ProcName'] = $this->procName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyPortDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindIp'])) {
            $model->bindIp = $map['BindIp'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcName'])) {
            $model->procName = $map['ProcName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
