<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeEdgeMobileAgentPackagesResponseBody;

use AlibabaCloud\Dara\Model;

class packages extends Model
{
    /**
     * @var string
     */
    public $deviceClass;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string[]
     */
    public $licenseKeys;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $packageSpec;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceClass' => 'DeviceClass',
        'expireDate' => 'ExpireDate',
        'licenseKeys' => 'LicenseKeys',
        'packageId' => 'PackageId',
        'packageSpec' => 'PackageSpec',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->licenseKeys)) {
            Model::validateArray($this->licenseKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceClass) {
            $res['DeviceClass'] = $this->deviceClass;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->licenseKeys) {
            if (\is_array($this->licenseKeys)) {
                $res['LicenseKeys'] = [];
                $n1 = 0;
                foreach ($this->licenseKeys as $item1) {
                    $res['LicenseKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->packageSpec) {
            $res['PackageSpec'] = $this->packageSpec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DeviceClass'])) {
            $model->deviceClass = $map['DeviceClass'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['LicenseKeys'])) {
            if (!empty($map['LicenseKeys'])) {
                $model->licenseKeys = [];
                $n1 = 0;
                foreach ($map['LicenseKeys'] as $item1) {
                    $model->licenseKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['PackageSpec'])) {
            $model->packageSpec = $map['PackageSpec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
