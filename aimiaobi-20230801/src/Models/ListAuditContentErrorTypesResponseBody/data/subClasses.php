<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAuditContentErrorTypesResponseBody\data;

use AlibabaCloud\Tea\Model;

class subClasses extends Model
{
    /**
     * @example PunctuationError
     *
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $className;
    protected $_name = [
        'classCode' => 'ClassCode',
        'className' => 'ClassName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        return $model;
    }
}
