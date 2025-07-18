<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;

use AlibabaCloud\Tea\Model;

class deviceBasicInfo extends Model
{
    /**
     * @description CPU model.
     *
     * @example Intel(R) Core(TM) i5-10210U CPU @ 1.60GHz
     *
     * @var string
     */
    public $cpu;

    /**
     * @description Device ID.
     *
     * @example A84D0AF0-1ACC-02B8-6A07-FC898F71BE09
     *
     * @var string
     */
    public $devTag;

    /**
     * @description Device operating system type. Values:
     * - **Windows**：Windows system.
     * - **macOS**：macOS system.
     * - **Linux**：Linux system.
     * - **Android**：Android system.
     * - **iOS**：iOS system.
     * - **Windows_Wuying**：Wuying cloud desktop system.
     *
     * @example windows
     *
     * @var string
     */
    public $devType;

    /**
     * @description Device disk model.
     *
     * @example KXG6AZNV512G TOSHIBA
     *
     * @var string
     */
    public $disk;

    /**
     * @description Device name.
     *
     * @example DESKTOP-ERLV3AK
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Device MAC address.
     *
     * @example CE:3B:**:**:FD:FB
     *
     * @var string
     */
    public $mac;

    /**
     * @description Device memory capacity. Unit: GB.
     *
     * @example 2
     *
     * @var string
     */
    public $memory;

    /**
     * @description Operating system version
     *
     * @example 1
     *
     * @var string
     */
    public $osVersion;
    protected $_name = [
        'cpu' => 'Cpu',
        'devTag' => 'DevTag',
        'devType' => 'DevType',
        'disk' => 'Disk',
        'hostname' => 'Hostname',
        'mac' => 'Mac',
        'memory' => 'Memory',
        'osVersion' => 'OsVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }
        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }
        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        return $model;
    }
}
