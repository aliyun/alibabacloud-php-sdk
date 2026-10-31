<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPythonModulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPythonModulesResponseBody\pageResult\pythonModuleList;

class pageResult extends Model
{
    /**
     * @var pythonModuleList[]
     */
    public $pythonModuleList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pythonModuleList' => 'PythonModuleList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pythonModuleList) {
            if (\is_array($this->pythonModuleList)) {
                $res['PythonModuleList'] = [];
                $n1 = 0;
                foreach ($this->pythonModuleList as $item1) {
                    $res['PythonModuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PythonModuleList'])) {
            if (!empty($map['PythonModuleList'])) {
                $model->pythonModuleList = [];
                $n1 = 0;
                foreach ($map['PythonModuleList'] as $item1) {
                    $model->pythonModuleList[$n1] = pythonModuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
