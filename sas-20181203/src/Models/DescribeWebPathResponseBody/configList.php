<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody\configList\targetList;

class configList extends Model
{
    /**
     * @var targetList[]
     */
    public $targetList;
    /**
     * @var string
     */
    public $webPath;
    /**
     * @var string
     */
    public $webPathType;
    protected $_name = [
        'targetList'  => 'TargetList',
        'webPath'     => 'WebPath',
        'webPathType' => 'WebPathType',
    ];

    public function validate()
    {
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetList) {
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1                = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->webPath) {
            $res['WebPath'] = $this->webPath;
        }

        if (null !== $this->webPathType) {
            $res['WebPathType'] = $this->webPathType;
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
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n1                = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1++] = targetList::fromMap($item1);
                }
            }
        }

        if (isset($map['WebPath'])) {
            $model->webPath = $map['WebPath'];
        }

        if (isset($map['WebPathType'])) {
            $model->webPathType = $map['WebPathType'];
        }

        return $model;
    }
}
