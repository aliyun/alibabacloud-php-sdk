<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationParametersRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $componentIdList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'componentIdList' => 'ComponentIdList',
    ];

    public function validate()
    {
        if (\is_array($this->componentIdList)) {
            Model::validateArray($this->componentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->componentIdList) {
            if (\is_array($this->componentIdList)) {
                $res['ComponentIdList'] = [];
                $n1 = 0;
                foreach ($this->componentIdList as $item1) {
                    $res['ComponentIdList'][$n1] = $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ComponentIdList'])) {
            if (!empty($map['ComponentIdList'])) {
                $model->componentIdList = [];
                $n1 = 0;
                foreach ($map['ComponentIdList'] as $item1) {
                    $model->componentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
