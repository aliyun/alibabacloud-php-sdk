<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent\cveDetails;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent\license;

class scaComponent extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var int
     */
    public $cveCount;

    /**
     * @var cveDetails[]
     */
    public $cveDetails;

    /**
     * @var string
     */
    public $declaredIn;

    /**
     * @var string
     */
    public $ecosystem;

    /**
     * @var string[]
     */
    public $introPaths;

    /**
     * @var bool
     */
    public $isDirect;

    /**
     * @var license
     */
    public $license;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $purl;

    /**
     * @var string
     */
    public $remediation;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'componentType' => 'componentType',
        'cveCount' => 'cveCount',
        'cveDetails' => 'cveDetails',
        'declaredIn' => 'declaredIn',
        'ecosystem' => 'ecosystem',
        'introPaths' => 'introPaths',
        'isDirect' => 'isDirect',
        'license' => 'license',
        'packageName' => 'packageName',
        'purl' => 'purl',
        'remediation' => 'remediation',
        'scope' => 'scope',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->cveDetails)) {
            Model::validateArray($this->cveDetails);
        }
        if (\is_array($this->introPaths)) {
            Model::validateArray($this->introPaths);
        }
        if (null !== $this->license) {
            $this->license->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->cveCount) {
            $res['cveCount'] = $this->cveCount;
        }

        if (null !== $this->cveDetails) {
            if (\is_array($this->cveDetails)) {
                $res['cveDetails'] = [];
                $n1 = 0;
                foreach ($this->cveDetails as $item1) {
                    $res['cveDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->declaredIn) {
            $res['declaredIn'] = $this->declaredIn;
        }

        if (null !== $this->ecosystem) {
            $res['ecosystem'] = $this->ecosystem;
        }

        if (null !== $this->introPaths) {
            if (\is_array($this->introPaths)) {
                $res['introPaths'] = [];
                $n1 = 0;
                foreach ($this->introPaths as $item1) {
                    $res['introPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isDirect) {
            $res['isDirect'] = $this->isDirect;
        }

        if (null !== $this->license) {
            $res['license'] = null !== $this->license ? $this->license->toArray($noStream) : $this->license;
        }

        if (null !== $this->packageName) {
            $res['packageName'] = $this->packageName;
        }

        if (null !== $this->purl) {
            $res['purl'] = $this->purl;
        }

        if (null !== $this->remediation) {
            $res['remediation'] = $this->remediation;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['cveCount'])) {
            $model->cveCount = $map['cveCount'];
        }

        if (isset($map['cveDetails'])) {
            if (!empty($map['cveDetails'])) {
                $model->cveDetails = [];
                $n1 = 0;
                foreach ($map['cveDetails'] as $item1) {
                    $model->cveDetails[$n1] = cveDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['declaredIn'])) {
            $model->declaredIn = $map['declaredIn'];
        }

        if (isset($map['ecosystem'])) {
            $model->ecosystem = $map['ecosystem'];
        }

        if (isset($map['introPaths'])) {
            if (!empty($map['introPaths'])) {
                $model->introPaths = [];
                $n1 = 0;
                foreach ($map['introPaths'] as $item1) {
                    $model->introPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['isDirect'])) {
            $model->isDirect = $map['isDirect'];
        }

        if (isset($map['license'])) {
            $model->license = license::fromMap($map['license']);
        }

        if (isset($map['packageName'])) {
            $model->packageName = $map['packageName'];
        }

        if (isset($map['purl'])) {
            $model->purl = $map['purl'];
        }

        if (isset($map['remediation'])) {
            $model->remediation = $map['remediation'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
