<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RegisterLineageRelationResponseBody;

use AlibabaCloud\Tea\Model;

class lineageRelation extends Model
{
    /**
     * @description The unique identifier of the destination entity.
     *
     * @example custom-report.month_stat_user
     *
     * @var string
     */
    public $destEntityQualifiedName;

    /**
     * @description The ID of the lineage between entities.
     *
     * @example dfsldfdlsfdsaaaabbbb
     *
     * @var string
     */
    public $relationshipGuid;

    /**
     * @description The unique identifier of the source entity.
     *
     * @example maxcompute-table.project.table
     *
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
        if (null !== $this->srcEntityQualifiedName) {
            $res['SrcEntityQualifiedName'] = $this->srcEntityQualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineageRelation
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
        if (isset($map['SrcEntityQualifiedName'])) {
            $model->srcEntityQualifiedName = $map['SrcEntityQualifiedName'];
        }

        return $model;
    }
}
