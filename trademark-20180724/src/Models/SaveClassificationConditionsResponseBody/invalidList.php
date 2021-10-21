<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\SaveClassificationConditionsResponseBody;

use AlibabaCloud\Tea\Model;

class invalidList extends Model
{
    /**
     * @var string
     */
    public $parentCode;

    /**
     * @var string
     */
    public $officialCode;

    /**
     * @var string
     */
    public $classificationName;

    /**
     * @var string
     */
    public $classificationCode;
    protected $_name = [
        'parentCode'         => 'ParentCode',
        'officialCode'       => 'OfficialCode',
        'classificationName' => 'ClassificationName',
        'classificationCode' => 'ClassificationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }
        if (null !== $this->officialCode) {
            $res['OfficialCode'] = $this->officialCode;
        }
        if (null !== $this->classificationName) {
            $res['ClassificationName'] = $this->classificationName;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }
        if (isset($map['OfficialCode'])) {
            $model->officialCode = $map['OfficialCode'];
        }
        if (isset($map['ClassificationName'])) {
            $model->classificationName = $map['ClassificationName'];
        }
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }

        return $model;
    }
}
