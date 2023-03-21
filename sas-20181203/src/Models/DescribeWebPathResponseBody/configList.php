<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody\configList\targetList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetList) {
            $res['TargetList'] = [];
            if (null !== $this->targetList && \is_array($this->targetList)) {
                $n = 0;
                foreach ($this->targetList as $item) {
                    $res['TargetList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n                 = 0;
                foreach ($map['TargetList'] as $item) {
                    $model->targetList[$n++] = null !== $item ? targetList::fromMap($item) : $item;
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
