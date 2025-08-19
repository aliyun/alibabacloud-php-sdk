<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords\vulList\packageList;

class vulList extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string[]
     */
    public $cveList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var bool
     */
    public $needReboot;

    /**
     * @var packageList[]
     */
    public $packageList;
    protected $_name = [
        'aliasName' => 'alias_name',
        'cveList' => 'cve_list',
        'name' => 'name',
        'necessity' => 'necessity',
        'needReboot' => 'need_reboot',
        'packageList' => 'package_list',
    ];

    public function validate()
    {
        if (\is_array($this->cveList)) {
            Model::validateArray($this->cveList);
        }
        if (\is_array($this->packageList)) {
            Model::validateArray($this->packageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['alias_name'] = $this->aliasName;
        }

        if (null !== $this->cveList) {
            if (\is_array($this->cveList)) {
                $res['cve_list'] = [];
                $n1 = 0;
                foreach ($this->cveList as $item1) {
                    $res['cve_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->necessity) {
            $res['necessity'] = $this->necessity;
        }

        if (null !== $this->needReboot) {
            $res['need_reboot'] = $this->needReboot;
        }

        if (null !== $this->packageList) {
            if (\is_array($this->packageList)) {
                $res['package_list'] = [];
                $n1 = 0;
                foreach ($this->packageList as $item1) {
                    $res['package_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['alias_name'])) {
            $model->aliasName = $map['alias_name'];
        }

        if (isset($map['cve_list'])) {
            if (!empty($map['cve_list'])) {
                $model->cveList = [];
                $n1 = 0;
                foreach ($map['cve_list'] as $item1) {
                    $model->cveList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['necessity'])) {
            $model->necessity = $map['necessity'];
        }

        if (isset($map['need_reboot'])) {
            $model->needReboot = $map['need_reboot'];
        }

        if (isset($map['package_list'])) {
            if (!empty($map['package_list'])) {
                $model->packageList = [];
                $n1 = 0;
                foreach ($map['package_list'] as $item1) {
                    $model->packageList[$n1] = packageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
