<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://192.168.1.10:9999/
     *
     * @var string
     */
    public $address;

    /**
     * @example 192.168.1.10
     *
     * @var string
     */
    public $ip;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDesignated;

    /**
     * @example gray
     *
     * @var string
     */
    public $label;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @example 9999
     *
     * @var int
     */
    public $port;

    /**
     * @example 2.0.2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'address'      => 'Address',
        'ip'           => 'Ip',
        'isDesignated' => 'IsDesignated',
        'label'        => 'Label',
        'online'       => 'Online',
        'port'         => 'Port',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isDesignated) {
            $res['IsDesignated'] = $this->isDesignated;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IsDesignated'])) {
            $model->isDesignated = $map['IsDesignated'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
