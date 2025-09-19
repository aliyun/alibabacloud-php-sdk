<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableAttackPathResponseBody;

use AlibabaCloud\Dara\Model;

class attackPathList extends Model
{
    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $pathNameDesc;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $pathTypeDesc;
    protected $_name = [
        'pathName' => 'PathName',
        'pathNameDesc' => 'PathNameDesc',
        'pathType' => 'PathType',
        'pathTypeDesc' => 'PathTypeDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        if (null !== $this->pathNameDesc) {
            $res['PathNameDesc'] = $this->pathNameDesc;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->pathTypeDesc) {
            $res['PathTypeDesc'] = $this->pathTypeDesc;
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
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        if (isset($map['PathNameDesc'])) {
            $model->pathNameDesc = $map['PathNameDesc'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['PathTypeDesc'])) {
            $model->pathTypeDesc = $map['PathTypeDesc'];
        }

        return $model;
    }
}
