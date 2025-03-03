<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class LineageRelation extends Model
{
    /**
     * @var string
     */
    public $destEntityQualifiedName;
    /**
     * @var string
     */
    public $relationshipGuid;
    /**
     * @var string
     */
    public $srcEntityQualifiedName;
    protected $_name = [
        'destEntityQualifiedName' => 'DestEntityQualifiedName',
        'relationshipGuid'        => 'RelationshipGuid',
        'srcEntityQualifiedName'  => 'SrcEntityQualifiedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destEntityQualifiedName) {
            $res['DestEntityQualifiedName'] = $this->destEntityQualifiedName;
        }

        if (null !== $this->relationshipGuid) {
            $res['RelationshipGuid'] = $this->relationshipGuid;
        }

        if (null !== $this->srcEntityQualifiedName) {
            $res['SrcEntityQualifiedName'] = $this->srcEntityQualifiedName;
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
        if (isset($map['DestEntityQualifiedName'])) {
            $model->destEntityQualifiedName = $map['DestEntityQualifiedName'];
        }

        if (isset($map['RelationshipGuid'])) {
            $model->relationshipGuid = $map['RelationshipGuid'];
        }

        if (isset($map['SrcEntityQualifiedName'])) {
            $model->srcEntityQualifiedName = $map['SrcEntityQualifiedName'];
        }

        return $model;
    }
}
