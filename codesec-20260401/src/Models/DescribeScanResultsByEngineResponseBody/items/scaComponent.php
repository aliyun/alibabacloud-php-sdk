<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent\cveDetails;

class scaComponent extends Model
{
    /**
     * @var int
     */
    public $cveCount;

    /**
     * @var cveDetails[]
     */
    public $cveDetails;

    /**
     * @var string[]
     */
    public $introPaths;

    /**
     * @var bool
     */
    public $isDirect;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $remediation;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'cveCount' => 'cveCount',
        'cveDetails' => 'cveDetails',
        'introPaths' => 'introPaths',
        'isDirect' => 'isDirect',
        'packageName' => 'packageName',
        'remediation' => 'remediation',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->packageName) {
            $res['packageName'] = $this->packageName;
        }

        if (null !== $this->remediation) {
            $res['remediation'] = $this->remediation;
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

        if (isset($map['packageName'])) {
            $model->packageName = $map['packageName'];
        }

        if (isset($map['remediation'])) {
            $model->remediation = $map['remediation'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
