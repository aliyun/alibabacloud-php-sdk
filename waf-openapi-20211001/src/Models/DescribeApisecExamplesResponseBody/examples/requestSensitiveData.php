<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecExamplesResponseBody\examples;

use AlibabaCloud\Dara\Model;

class requestSensitiveData extends Model
{
    /**
     * @var string
     */
    public $sensitiveCode;

    /**
     * @var string[]
     */
    public $sensitiveDataList;
    protected $_name = [
        'sensitiveCode' => 'SensitiveCode',
        'sensitiveDataList' => 'SensitiveDataList',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveDataList)) {
            Model::validateArray($this->sensitiveDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }

        if (null !== $this->sensitiveDataList) {
            if (\is_array($this->sensitiveDataList)) {
                $res['SensitiveDataList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveDataList as $item1) {
                    $res['SensitiveDataList'][$n1] = $item1;
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
        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        if (isset($map['SensitiveDataList'])) {
            if (!empty($map['SensitiveDataList'])) {
                $model->sensitiveDataList = [];
                $n1 = 0;
                foreach ($map['SensitiveDataList'] as $item1) {
                    $model->sensitiveDataList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
