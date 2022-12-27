<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDetailInfos extends Model
{
    /**
     * @example h-uf6009zoa6hdbjyqxcn1
     *
     * @var string
     */
    public $ID;

    /**
     * @example 10.152.196.36
     *
     * @var string
     */
    public $IP;

    /**
     * @example telecom
     *
     * @var string
     */
    public $ISP;

    /**
     * @example 24:0B:88:04:71:E0
     *
     * @var string
     */
    public $mac;

    /**
     * @example cn-chongqing-1
     *
     * @var string
     */
    public $regionID;

    /**
     * @example ens-nc2
     *
     * @var string
     */
    public $server;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example ens.ac6.large
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ID'       => 'ID',
        'IP'       => 'IP',
        'ISP'      => 'ISP',
        'mac'      => 'Mac',
        'regionID' => 'RegionID',
        'server'   => 'Server',
        'status'   => 'Status',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDetailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
