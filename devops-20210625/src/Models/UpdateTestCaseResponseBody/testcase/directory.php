<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Dara\Model;

class directory extends Model
{
    /**
     * @var string
     */
    public $childIdentifier;

    /**
     * @var string
     */
    public $directoryIdentifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $pathName;
    protected $_name = [
        'childIdentifier' => 'childIdentifier',
        'directoryIdentifier' => 'directoryIdentifier',
        'name' => 'name',
        'pathName' => 'pathName',
    ];

    public function validate()
    {
        if (\is_array($this->pathName)) {
            Model::validateArray($this->pathName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childIdentifier) {
            $res['childIdentifier'] = $this->childIdentifier;
        }

        if (null !== $this->directoryIdentifier) {
            $res['directoryIdentifier'] = $this->directoryIdentifier;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pathName) {
            if (\is_array($this->pathName)) {
                $res['pathName'] = [];
                $n1 = 0;
                foreach ($this->pathName as $item1) {
                    $res['pathName'][$n1] = $item1;
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
        if (isset($map['childIdentifier'])) {
            $model->childIdentifier = $map['childIdentifier'];
        }

        if (isset($map['directoryIdentifier'])) {
            $model->directoryIdentifier = $map['directoryIdentifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pathName'])) {
            if (!empty($map['pathName'])) {
                $model->pathName = [];
                $n1 = 0;
                foreach ($map['pathName'] as $item1) {
                    $model->pathName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
