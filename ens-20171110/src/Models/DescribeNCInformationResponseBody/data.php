<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\cpu;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\gpu;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\hdd;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\info;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\memory;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\nvme;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponseBody\data\ssd;

class data extends Model
{
    /**
     * @var cpu
     */
    public $cpu;

    /**
     * @var gpu
     */
    public $gpu;

    /**
     * @var hdd
     */
    public $hdd;

    /**
     * @var info
     */
    public $info;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var nvme
     */
    public $nvme;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $region;

    /**
     * @var ssd
     */
    public $ssd;

    /**
     * @var string
     */
    public $virtual;
    protected $_name = [
        'cpu' => 'Cpu',
        'gpu' => 'Gpu',
        'hdd' => 'Hdd',
        'info' => 'Info',
        'memory' => 'Memory',
        'nvme' => 'Nvme',
        'online' => 'Online',
        'region' => 'Region',
        'ssd' => 'Ssd',
        'virtual' => 'Virtual',
    ];

    public function validate()
    {
        if (null !== $this->cpu) {
            $this->cpu->validate();
        }
        if (null !== $this->gpu) {
            $this->gpu->validate();
        }
        if (null !== $this->hdd) {
            $this->hdd->validate();
        }
        if (null !== $this->info) {
            $this->info->validate();
        }
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        if (null !== $this->nvme) {
            $this->nvme->validate();
        }
        if (null !== $this->ssd) {
            $this->ssd->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toArray($noStream) : $this->cpu;
        }

        if (null !== $this->gpu) {
            $res['Gpu'] = null !== $this->gpu ? $this->gpu->toArray($noStream) : $this->gpu;
        }

        if (null !== $this->hdd) {
            $res['Hdd'] = null !== $this->hdd ? $this->hdd->toArray($noStream) : $this->hdd;
        }

        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toArray($noStream) : $this->info;
        }

        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->nvme) {
            $res['Nvme'] = null !== $this->nvme ? $this->nvme->toArray($noStream) : $this->nvme;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->ssd) {
            $res['Ssd'] = null !== $this->ssd ? $this->ssd->toArray($noStream) : $this->ssd;
        }

        if (null !== $this->virtual) {
            $res['Virtual'] = $this->virtual;
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
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }

        if (isset($map['Gpu'])) {
            $model->gpu = gpu::fromMap($map['Gpu']);
        }

        if (isset($map['Hdd'])) {
            $model->hdd = hdd::fromMap($map['Hdd']);
        }

        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }

        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }

        if (isset($map['Nvme'])) {
            $model->nvme = nvme::fromMap($map['Nvme']);
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Ssd'])) {
            $model->ssd = ssd::fromMap($map['Ssd']);
        }

        if (isset($map['Virtual'])) {
            $model->virtual = $map['Virtual'];
        }

        return $model;
    }
}
