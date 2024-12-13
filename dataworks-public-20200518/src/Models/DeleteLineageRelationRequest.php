<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteLineageRelationRequest extends Model
{
    /**
     * @description Destination entity unique identifier
     *
     * This parameter is required.
     * @example custom-report.report123
     *
     * @var string
     */
    public $destEntityQualifiedName;

    /**
     * @description Lineage relationship unique identifier
     *
     * @example dfazcdfdfccdedd
     *
     * @var string
     */
    public $relationshipGuid;

    /**
     * @description Relationship type
     *
     * @example sql
     *
     * @var string
     */
    public $relationshipType;

    /**
     * @description Source entity unique identifier
     *
     * This parameter is required.
     * @example maxcompute-table.project.table
     *
     * @var string
     */
    public $srcEntityQualifiedName;
    protected $_name = [
        'destEntityQualifiedName' => 'DestEntityQualifiedName',
        'relationshipGuid'        => 'RelationshipGuid',
        'relationshipType'        => 'RelationshipType',
        'srcEntityQualifiedName'  => 'SrcEntityQualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destEntityQualifiedName) {
            $res['DestEntityQualifiedName'] = $this->destEntityQualifiedName;
        }
        if (null !== $this->relationshipGuid) {
            $res['RelationshipGuid'] = $this->relationshipGuid;
        }
        if (null !== $this->relationshipType) {
            $res['RelationshipType'] = $this->relationshipType;
        }
        if (null !== $this->srcEntityQualifiedName) {
            $res['SrcEntityQualifiedName'] = $this->srcEntityQualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLineageRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestEntityQualifiedName'])) {
            $model->destEntityQualifiedName = $map['DestEntityQualifiedName'];
        }
        if (isset($map['RelationshipGuid'])) {
            $model->relationshipGuid = $map['RelationshipGuid'];
        }
        if (isset($map['RelationshipType'])) {
            $model->relationshipType = $map['RelationshipType'];
        }
        if (isset($map['SrcEntityQualifiedName'])) {
            $model->srcEntityQualifiedName = $map['SrcEntityQualifiedName'];
        }

        return $model;
    }
}
