<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'aliasName' => 'alias_name',
        'cveList' => 'cve_list',
        'name' => 'name',
        'necessity' => 'necessity',
        'needReboot' => 'need_reboot',
    ];

    public function validate()
    {
        if (\is_array($this->cveList)) {
            Model::validateArray($this->cveList);
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
                    $res['cve_list'][$n1++] = $item1;
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
                    $model->cveList[$n1++] = $item1;
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

        return $model;
    }
}
