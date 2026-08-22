<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchNodesResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $cpuPercent;

    /**
     * @var int
     */
    public $diskSizeGB;

    /**
     * @var string
     */
    public $diskUsedPercent;

    /**
     * @var string
     */
    public $health;

    /**
     * @var string
     */
    public $heapPercent;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $loadOneM;

    /**
     * @var int
     */
    public $memoryGB;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpuCores' => 'CpuCores',
        'cpuPercent' => 'CpuPercent',
        'diskSizeGB' => 'DiskSizeGB',
        'diskUsedPercent' => 'DiskUsedPercent',
        'health' => 'Health',
        'heapPercent' => 'HeapPercent',
        'host' => 'Host',
        'hostName' => 'HostName',
        'loadOneM' => 'LoadOneM',
        'memoryGB' => 'MemoryGB',
        'nodeType' => 'NodeType',
        'port' => 'Port',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }

        if (null !== $this->cpuPercent) {
            $res['CpuPercent'] = $this->cpuPercent;
        }

        if (null !== $this->diskSizeGB) {
            $res['DiskSizeGB'] = $this->diskSizeGB;
        }

        if (null !== $this->diskUsedPercent) {
            $res['DiskUsedPercent'] = $this->diskUsedPercent;
        }

        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }

        if (null !== $this->heapPercent) {
            $res['HeapPercent'] = $this->heapPercent;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->loadOneM) {
            $res['LoadOneM'] = $this->loadOneM;
        }

        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }

        if (isset($map['CpuPercent'])) {
            $model->cpuPercent = $map['CpuPercent'];
        }

        if (isset($map['DiskSizeGB'])) {
            $model->diskSizeGB = $map['DiskSizeGB'];
        }

        if (isset($map['DiskUsedPercent'])) {
            $model->diskUsedPercent = $map['DiskUsedPercent'];
        }

        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }

        if (isset($map['HeapPercent'])) {
            $model->heapPercent = $map['HeapPercent'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['LoadOneM'])) {
            $model->loadOneM = $map['LoadOneM'];
        }

        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
