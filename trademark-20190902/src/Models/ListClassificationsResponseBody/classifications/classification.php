<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListClassificationsResponseBody\classifications;

use AlibabaCloud\Tea\Model;

class classification extends Model
{
    /**
     * @example 01
     *
     * @var string
     */
    public $classificationCode;

    /**
     * @var string
     */
    public $classificationName;

    /**
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @example 01
     *
     * @var string
     */
    public $officialCode;

    /**
     * @example 0
     *
     * @var string
     */
    public $parentCode;
    protected $_name = [
        'classificationCode' => 'ClassificationCode',
        'classificationName' => 'ClassificationName',
        'id'                 => 'Id',
        'level'              => 'Level',
        'officialCode'       => 'OfficialCode',
        'parentCode'         => 'ParentCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }
        if (null !== $this->classificationName) {
            $res['ClassificationName'] = $this->classificationName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->officialCode) {
            $res['OfficialCode'] = $this->officialCode;
        }
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }
        if (isset($map['ClassificationName'])) {
            $model->classificationName = $map['ClassificationName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OfficialCode'])) {
            $model->officialCode = $map['OfficialCode'];
        }
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        return $model;
    }
}
