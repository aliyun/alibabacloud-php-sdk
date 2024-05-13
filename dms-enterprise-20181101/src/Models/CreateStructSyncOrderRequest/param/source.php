<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The ID of the database. You can call the [SearchDatabases](https://help.aliyun.com/document_detail/141876.html) operation to query the ID of the database.
     *
     * This parameter is required.
     * @example 4324532
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The name that is used to search for the database. You can call the [SearchDatabases](https://help.aliyun.com/document_detail/141876.html) operation to query the name of the database.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is not a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The version number of the schema. The default value is the latest schema version number. For more information, see [Manage schema versions](https://help.aliyun.com/document_detail/202275.html).
     *
     * @example e179bbb8163dcdcfacda24858bedb4d8006ae2b8
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'dbId'         => 'DbId',
        'dbSearchName' => 'DbSearchName',
        'logic'        => 'Logic',
        'versionId'    => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbSearchName) {
            $res['DbSearchName'] = $this->dbSearchName;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbSearchName'])) {
            $model->dbSearchName = $map['DbSearchName'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
