<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigListResponseBody;

use AlibabaCloud\Dara\Model;

class overallList extends Model
{
    /**
     * @var string[]
     */
    public $authVersionList;

    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authVersionList' => 'AuthVersionList',
        'config' => 'Config',
        'totalCount' => 'TotalCount',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->authVersionList)) {
            Model::validateArray($this->authVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authVersionList) {
            if (\is_array($this->authVersionList)) {
                $res['AuthVersionList'] = [];
                $n1 = 0;
                foreach ($this->authVersionList as $item1) {
                    $res['AuthVersionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AuthVersionList'])) {
            if (!empty($map['AuthVersionList'])) {
                $model->authVersionList = [];
                $n1 = 0;
                foreach ($map['AuthVersionList'] as $item1) {
                    $model->authVersionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
