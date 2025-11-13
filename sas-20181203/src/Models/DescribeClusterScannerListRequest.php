<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterScannerListRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIdList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'clusterIdList' => 'ClusterIdList',
        'lang' => 'Lang',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (\is_array($this->clusterIdList)) {
            Model::validateArray($this->clusterIdList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIdList) {
            if (\is_array($this->clusterIdList)) {
                $res['ClusterIdList'] = [];
                $n1 = 0;
                foreach ($this->clusterIdList as $item1) {
                    $res['ClusterIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
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
        if (isset($map['ClusterIdList'])) {
            if (!empty($map['ClusterIdList'])) {
                $model->clusterIdList = [];
                $n1 = 0;
                foreach ($map['ClusterIdList'] as $item1) {
                    $model->clusterIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
