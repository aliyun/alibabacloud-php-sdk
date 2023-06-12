<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class LineageEntityVO extends Model
{
    /**
     * @example http://domain.test.url/entity
     *
     * @var string
     */
    public $detailUrl;

    /**
     * @example tableName
     *
     * @var string
     */
    public $name;

    /**
     * @example dbName
     *
     * @var string
     */
    public $parentName;

    /**
     * @example maxcompute-table.projectName.tablename
     *
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'detailUrl'     => 'DetailUrl',
        'name'          => 'Name',
        'parentName'    => 'ParentName',
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailUrl) {
            $res['DetailUrl'] = $this->detailUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentName) {
            $res['ParentName'] = $this->parentName;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageEntityVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailUrl'])) {
            $model->detailUrl = $map['DetailUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentName'])) {
            $model->parentName = $map['ParentName'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
