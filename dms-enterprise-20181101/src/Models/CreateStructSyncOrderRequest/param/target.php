<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @example 432432
     *
     * @var int
     */
    public $dbId;

    /**
     * @example test
     *
     * @var string
     */
    public $dbSearchName;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
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
     * @return target
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
