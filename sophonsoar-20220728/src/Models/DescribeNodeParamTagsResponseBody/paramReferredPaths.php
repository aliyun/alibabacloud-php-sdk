<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponseBody;

use AlibabaCloud\Dara\Model;

class paramReferredPaths extends Model
{
    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string[]
     */
    public $referredPath;
    protected $_name = [
        'paramName' => 'ParamName',
        'referredPath' => 'ReferredPath',
    ];

    public function validate()
    {
        if (\is_array($this->referredPath)) {
            Model::validateArray($this->referredPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        if (null !== $this->referredPath) {
            if (\is_array($this->referredPath)) {
                $res['ReferredPath'] = [];
                $n1 = 0;
                foreach ($this->referredPath as $item1) {
                    $res['ReferredPath'][$n1] = $item1;
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
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        if (isset($map['ReferredPath'])) {
            if (!empty($map['ReferredPath'])) {
                $model->referredPath = [];
                $n1 = 0;
                foreach ($map['ReferredPath'] as $item1) {
                    $model->referredPath[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
