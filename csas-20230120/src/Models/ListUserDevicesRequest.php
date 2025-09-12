<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListUserDevicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $appStatuses;

    /**
     * @var string[]
     */
    public $appVersions;

    /**
     * @var string[]
     */
    public $autoLoginStatuses;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $deviceBelong;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string[]
     */
    public $deviceStatuses;

    /**
     * @var string[]
     */
    public $deviceTags;

    /**
     * @var string[]
     */
    public $deviceTypes;

    /**
     * @var string[]
     */
    public $dlpStatuses;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string[]
     */
    public $iaStatuses;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string[]
     */
    public $nacStatuses;

    /**
     * @var string[]
     */
    public $paStatuses;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var bool
     */
    public $sharingStatus;

    /**
     * @var string
     */
    public $snSystem;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workshop;
    protected $_name = [
        'appStatuses' => 'AppStatuses',
        'appVersions' => 'AppVersions',
        'autoLoginStatuses' => 'AutoLoginStatuses',
        'currentPage' => 'CurrentPage',
        'department' => 'Department',
        'deviceBelong' => 'DeviceBelong',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceStatuses' => 'DeviceStatuses',
        'deviceTags' => 'DeviceTags',
        'deviceTypes' => 'DeviceTypes',
        'dlpStatuses' => 'DlpStatuses',
        'hostname' => 'Hostname',
        'iaStatuses' => 'IaStatuses',
        'innerIp' => 'InnerIp',
        'mac' => 'Mac',
        'nacStatuses' => 'NacStatuses',
        'paStatuses' => 'PaStatuses',
        'pageSize' => 'PageSize',
        'saseUserId' => 'SaseUserId',
        'sharingStatus' => 'SharingStatus',
        'snSystem' => 'SnSystem',
        'sortBy' => 'SortBy',
        'username' => 'Username',
        'workshop' => 'Workshop',
    ];

    public function validate()
    {
        if (\is_array($this->appStatuses)) {
            Model::validateArray($this->appStatuses);
        }
        if (\is_array($this->appVersions)) {
            Model::validateArray($this->appVersions);
        }
        if (\is_array($this->autoLoginStatuses)) {
            Model::validateArray($this->autoLoginStatuses);
        }
        if (\is_array($this->deviceStatuses)) {
            Model::validateArray($this->deviceStatuses);
        }
        if (\is_array($this->deviceTags)) {
            Model::validateArray($this->deviceTags);
        }
        if (\is_array($this->deviceTypes)) {
            Model::validateArray($this->deviceTypes);
        }
        if (\is_array($this->dlpStatuses)) {
            Model::validateArray($this->dlpStatuses);
        }
        if (\is_array($this->iaStatuses)) {
            Model::validateArray($this->iaStatuses);
        }
        if (\is_array($this->nacStatuses)) {
            Model::validateArray($this->nacStatuses);
        }
        if (\is_array($this->paStatuses)) {
            Model::validateArray($this->paStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appStatuses) {
            if (\is_array($this->appStatuses)) {
                $res['AppStatuses'] = [];
                $n1 = 0;
                foreach ($this->appStatuses as $item1) {
                    $res['AppStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appVersions) {
            if (\is_array($this->appVersions)) {
                $res['AppVersions'] = [];
                $n1 = 0;
                foreach ($this->appVersions as $item1) {
                    $res['AppVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoLoginStatuses) {
            if (\is_array($this->autoLoginStatuses)) {
                $res['AutoLoginStatuses'] = [];
                $n1 = 0;
                foreach ($this->autoLoginStatuses as $item1) {
                    $res['AutoLoginStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->deviceBelong) {
            $res['DeviceBelong'] = $this->deviceBelong;
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        if (null !== $this->deviceStatuses) {
            if (\is_array($this->deviceStatuses)) {
                $res['DeviceStatuses'] = [];
                $n1 = 0;
                foreach ($this->deviceStatuses as $item1) {
                    $res['DeviceStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceTags) {
            if (\is_array($this->deviceTags)) {
                $res['DeviceTags'] = [];
                $n1 = 0;
                foreach ($this->deviceTags as $item1) {
                    $res['DeviceTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceTypes) {
            if (\is_array($this->deviceTypes)) {
                $res['DeviceTypes'] = [];
                $n1 = 0;
                foreach ($this->deviceTypes as $item1) {
                    $res['DeviceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dlpStatuses) {
            if (\is_array($this->dlpStatuses)) {
                $res['DlpStatuses'] = [];
                $n1 = 0;
                foreach ($this->dlpStatuses as $item1) {
                    $res['DlpStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->iaStatuses) {
            if (\is_array($this->iaStatuses)) {
                $res['IaStatuses'] = [];
                $n1 = 0;
                foreach ($this->iaStatuses as $item1) {
                    $res['IaStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->nacStatuses) {
            if (\is_array($this->nacStatuses)) {
                $res['NacStatuses'] = [];
                $n1 = 0;
                foreach ($this->nacStatuses as $item1) {
                    $res['NacStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paStatuses) {
            if (\is_array($this->paStatuses)) {
                $res['PaStatuses'] = [];
                $n1 = 0;
                foreach ($this->paStatuses as $item1) {
                    $res['PaStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->sharingStatus) {
            $res['SharingStatus'] = $this->sharingStatus;
        }

        if (null !== $this->snSystem) {
            $res['SnSystem'] = $this->snSystem;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->workshop) {
            $res['Workshop'] = $this->workshop;
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
        if (isset($map['AppStatuses'])) {
            if (!empty($map['AppStatuses'])) {
                $model->appStatuses = [];
                $n1 = 0;
                foreach ($map['AppStatuses'] as $item1) {
                    $model->appStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppVersions'])) {
            if (!empty($map['AppVersions'])) {
                $model->appVersions = [];
                $n1 = 0;
                foreach ($map['AppVersions'] as $item1) {
                    $model->appVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AutoLoginStatuses'])) {
            if (!empty($map['AutoLoginStatuses'])) {
                $model->autoLoginStatuses = [];
                $n1 = 0;
                foreach ($map['AutoLoginStatuses'] as $item1) {
                    $model->autoLoginStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DeviceBelong'])) {
            $model->deviceBelong = $map['DeviceBelong'];
        }

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        if (isset($map['DeviceStatuses'])) {
            if (!empty($map['DeviceStatuses'])) {
                $model->deviceStatuses = [];
                $n1 = 0;
                foreach ($map['DeviceStatuses'] as $item1) {
                    $model->deviceStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = [];
                $n1 = 0;
                foreach ($map['DeviceTags'] as $item1) {
                    $model->deviceTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceTypes'])) {
            if (!empty($map['DeviceTypes'])) {
                $model->deviceTypes = [];
                $n1 = 0;
                foreach ($map['DeviceTypes'] as $item1) {
                    $model->deviceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DlpStatuses'])) {
            if (!empty($map['DlpStatuses'])) {
                $model->dlpStatuses = [];
                $n1 = 0;
                foreach ($map['DlpStatuses'] as $item1) {
                    $model->dlpStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['IaStatuses'])) {
            if (!empty($map['IaStatuses'])) {
                $model->iaStatuses = [];
                $n1 = 0;
                foreach ($map['IaStatuses'] as $item1) {
                    $model->iaStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['NacStatuses'])) {
            if (!empty($map['NacStatuses'])) {
                $model->nacStatuses = [];
                $n1 = 0;
                foreach ($map['NacStatuses'] as $item1) {
                    $model->nacStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PaStatuses'])) {
            if (!empty($map['PaStatuses'])) {
                $model->paStatuses = [];
                $n1 = 0;
                foreach ($map['PaStatuses'] as $item1) {
                    $model->paStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['SharingStatus'])) {
            $model->sharingStatus = $map['SharingStatus'];
        }

        if (isset($map['SnSystem'])) {
            $model->snSystem = $map['SnSystem'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['Workshop'])) {
            $model->workshop = $map['Workshop'];
        }

        return $model;
    }
}
