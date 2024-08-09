<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'className'       => 'className',
        'classType'       => 'classType',
        'functionNames'   => 'functionNames',
        'udfArtifactName' => 'udfArtifactName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->classType) {
            $res['classType'] = $this->classType;
        }
        if (null !== $this->functionNames) {
            $res['functionNames'] = $this->functionNames;
        }
        if (null !== $this->udfArtifactName) {
            $res['udfArtifactName'] = $this->udfArtifactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UdfClass
     */
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
                $model->functionNames = $map['functionNames'];
            }
        }
        if (isset($map['udfArtifactName'])) {
            $model->udfArtifactName = $map['udfArtifactName'];
        }

        return $model;
    }
}
