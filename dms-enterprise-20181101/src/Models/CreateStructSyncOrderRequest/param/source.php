<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var string
     */
    public $dbSearchName;
    /**
     * @var bool
     */
    public $logic;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
