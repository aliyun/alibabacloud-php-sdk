<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\armCard;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\bandwidth;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\blockStorage;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\cpu;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\gpu;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\hdd;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\ipv4s;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\ipv6s;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\memory;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\nvme;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\ossStorage;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\pangu;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\pcfarmNum;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponseBody\data\ssd;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $areaName;

    /**
     * @var armCard
     */
    public $armCard;

    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var bandwidth
     */
    public $bandwidth;

    /**
     * @var blockStorage
     */
    public $blockStorage;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

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
     * @var string
     */
    public $houseId;

    /**
     * @var ipv4s[]
     */
    public $ipv4s;

    /**
     * @var ipv6s[]
     */
    public $ipv6s;

    /**
     * @var string[]
     */
    public $ispTypes;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var nvme
     */
    public $nvme;

    /**
     * @var ossStorage
     */
    public $ossStorage;

    /**
     * @var pangu
     */
    public $pangu;

    /**
     * @var pcfarmNum
     */
    public $pcfarmNum;

    /**
     * @var bool
     */
    public $poc;

    /**
     * @var string
     */
    public $provinceCode;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var bool
     */
    public $reserveDisable;

    /**
     * @var ssd
     */
    public $ssd;

    /**
     * @var bool
     */
    public $statusDisable;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $virtual;
    protected $_name = [
        'areaCode'       => 'AreaCode',
        'areaName'       => 'AreaName',
        'armCard'        => 'ArmCard',
        'attributes'     => 'Attributes',
        'bandwidth'      => 'Bandwidth',
        'blockStorage'   => 'BlockStorage',
        'countryCode'    => 'CountryCode',
        'countryName'    => 'CountryName',
        'cpu'            => 'Cpu',
        'gpu'            => 'Gpu',
        'hdd'            => 'Hdd',
        'houseId'        => 'HouseId',
        'ipv4s'          => 'Ipv4s',
        'ipv6s'          => 'Ipv6s',
        'ispTypes'       => 'IspTypes',
        'memory'         => 'Memory',
        'name'           => 'Name',
        'nvme'           => 'Nvme',
        'ossStorage'     => 'OssStorage',
        'pangu'          => 'Pangu',
        'pcfarmNum'      => 'PcfarmNum',
        'poc'            => 'Poc',
        'provinceCode'   => 'ProvinceCode',
        'provinceName'   => 'ProvinceName',
        'reserveDisable' => 'ReserveDisable',
        'ssd'            => 'Ssd',
        'statusDisable'  => 'StatusDisable',
        'type'           => 'Type',
        'uuid'           => 'Uuid',
        'virtual'        => 'Virtual',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->armCard) {
            $res['ArmCard'] = null !== $this->armCard ? $this->armCard->toMap() : null;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = null !== $this->bandwidth ? $this->bandwidth->toMap() : null;
        }
        if (null !== $this->blockStorage) {
            $res['BlockStorage'] = null !== $this->blockStorage ? $this->blockStorage->toMap() : null;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = null !== $this->gpu ? $this->gpu->toMap() : null;
        }
        if (null !== $this->hdd) {
            $res['Hdd'] = null !== $this->hdd ? $this->hdd->toMap() : null;
        }
        if (null !== $this->houseId) {
            $res['HouseId'] = $this->houseId;
        }
        if (null !== $this->ipv4s) {
            $res['Ipv4s'] = [];
            if (null !== $this->ipv4s && \is_array($this->ipv4s)) {
                $n = 0;
                foreach ($this->ipv4s as $item) {
                    $res['Ipv4s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipv6s) {
            $res['Ipv6s'] = [];
            if (null !== $this->ipv6s && \is_array($this->ipv6s)) {
                $n = 0;
                foreach ($this->ipv6s as $item) {
                    $res['Ipv6s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ispTypes) {
            $res['IspTypes'] = $this->ispTypes;
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nvme) {
            $res['Nvme'] = null !== $this->nvme ? $this->nvme->toMap() : null;
        }
        if (null !== $this->ossStorage) {
            $res['OssStorage'] = null !== $this->ossStorage ? $this->ossStorage->toMap() : null;
        }
        if (null !== $this->pangu) {
            $res['Pangu'] = null !== $this->pangu ? $this->pangu->toMap() : null;
        }
        if (null !== $this->pcfarmNum) {
            $res['PcfarmNum'] = null !== $this->pcfarmNum ? $this->pcfarmNum->toMap() : null;
        }
        if (null !== $this->poc) {
            $res['Poc'] = $this->poc;
        }
        if (null !== $this->provinceCode) {
            $res['ProvinceCode'] = $this->provinceCode;
        }
        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }
        if (null !== $this->reserveDisable) {
            $res['ReserveDisable'] = $this->reserveDisable;
        }
        if (null !== $this->ssd) {
            $res['Ssd'] = null !== $this->ssd ? $this->ssd->toMap() : null;
        }
        if (null !== $this->statusDisable) {
            $res['StatusDisable'] = $this->statusDisable;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->virtual) {
            $res['Virtual'] = $this->virtual;
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
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['ArmCard'])) {
            $model->armCard = armCard::fromMap($map['ArmCard']);
        }
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = $map['Attributes'];
            }
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = bandwidth::fromMap($map['Bandwidth']);
        }
        if (isset($map['BlockStorage'])) {
            $model->blockStorage = blockStorage::fromMap($map['BlockStorage']);
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }
        if (isset($map['Gpu'])) {
            $model->gpu = gpu::fromMap($map['Gpu']);
        }
        if (isset($map['Hdd'])) {
            $model->hdd = hdd::fromMap($map['Hdd']);
        }
        if (isset($map['HouseId'])) {
            $model->houseId = $map['HouseId'];
        }
        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = [];
                $n            = 0;
                foreach ($map['Ipv4s'] as $item) {
                    $model->ipv4s[$n++] = null !== $item ? ipv4s::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ipv6s'])) {
            if (!empty($map['Ipv6s'])) {
                $model->ipv6s = [];
                $n            = 0;
                foreach ($map['Ipv6s'] as $item) {
                    $model->ipv6s[$n++] = null !== $item ? ipv6s::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IspTypes'])) {
            if (!empty($map['IspTypes'])) {
                $model->ispTypes = $map['IspTypes'];
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nvme'])) {
            $model->nvme = nvme::fromMap($map['Nvme']);
        }
        if (isset($map['OssStorage'])) {
            $model->ossStorage = ossStorage::fromMap($map['OssStorage']);
        }
        if (isset($map['Pangu'])) {
            $model->pangu = pangu::fromMap($map['Pangu']);
        }
        if (isset($map['PcfarmNum'])) {
            $model->pcfarmNum = pcfarmNum::fromMap($map['PcfarmNum']);
        }
        if (isset($map['Poc'])) {
            $model->poc = $map['Poc'];
        }
        if (isset($map['ProvinceCode'])) {
            $model->provinceCode = $map['ProvinceCode'];
        }
        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }
        if (isset($map['ReserveDisable'])) {
            $model->reserveDisable = $map['ReserveDisable'];
        }
        if (isset($map['Ssd'])) {
            $model->ssd = ssd::fromMap($map['Ssd']);
        }
        if (isset($map['StatusDisable'])) {
            $model->statusDisable = $map['StatusDisable'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Virtual'])) {
            $model->virtual = $map['Virtual'];
        }

        return $model;
    }
}
