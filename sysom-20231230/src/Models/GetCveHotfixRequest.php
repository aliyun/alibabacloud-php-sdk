<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetCveHotfixRequest extends Model
{
    /**
     * @var string[]
     */
    public $cveIds;

    /**
     * @var string[]
     */
    public $kernelVersions;
    protected $_name = [
        'cveIds' => 'cveIds',
        'kernelVersions' => 'kernelVersions',
    ];

    public function validate()
    {
        if (\is_array($this->cveIds)) {
            Model::validateArray($this->cveIds);
        }
        if (\is_array($this->kernelVersions)) {
            Model::validateArray($this->kernelVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveIds) {
            if (\is_array($this->cveIds)) {
                $res['cveIds'] = [];
                $n1 = 0;
                foreach ($this->cveIds as $item1) {
                    $res['cveIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kernelVersions) {
            if (\is_array($this->kernelVersions)) {
                $res['kernelVersions'] = [];
                $n1 = 0;
                foreach ($this->kernelVersions as $item1) {
                    $res['kernelVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['cveIds'])) {
            if (!empty($map['cveIds'])) {
                $model->cveIds = [];
                $n1 = 0;
                foreach ($map['cveIds'] as $item1) {
                    $model->cveIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['kernelVersions'])) {
            if (!empty($map['kernelVersions'])) {
                $model->kernelVersions = [];
                $n1 = 0;
                foreach ($map['kernelVersions'] as $item1) {
                    $model->kernelVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
