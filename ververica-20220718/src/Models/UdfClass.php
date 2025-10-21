<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class UdfClass extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $classType;

    /**
     * @var string[]
     */
    public $functionNames;

    /**
     * @var string
     */
    public $udfArtifactName;
    protected $_name = [
        'className' => 'className',
        'classType' => 'classType',
        'functionNames' => 'functionNames',
        'udfArtifactName' => 'udfArtifactName',
    ];

    public function validate()
    {
        if (\is_array($this->functionNames)) {
            Model::validateArray($this->functionNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->classType) {
            $res['classType'] = $this->classType;
        }

        if (null !== $this->functionNames) {
            if (\is_array($this->functionNames)) {
                $res['functionNames'] = [];
                $n1 = 0;
                foreach ($this->functionNames as $item1) {
                    $res['functionNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
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
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['classType'])) {
            $model->classType = $map['classType'];
        }

        if (isset($map['functionNames'])) {
            if (!empty($map['functionNames'])) {
                $model->functionNames = [];
                $n1 = 0;
                foreach ($map['functionNames'] as $item1) {
                    $model->functionNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
