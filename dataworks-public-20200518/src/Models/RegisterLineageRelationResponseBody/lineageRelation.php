<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\RegisterLineageRelationResponseBody;

use AlibabaCloud\Tea\Model;

class lineageRelation extends Model
{
    /**
     * @example custom-report.month_stat_user
     *
     * @var string
     */
    public $destEntityQualifiedName;

    /**
     * @example dfsldfdlsfdsaaaabbbb
     *
     * @var string
     */
    public $relationshipGuid;

    /**
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
