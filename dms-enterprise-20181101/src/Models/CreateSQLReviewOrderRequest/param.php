<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description The files to be reviewed. Multiple files can be reviewed at a time.
     *
     * @var string[]
     */
    public $attachmentKeyList;

    /**
     * @description The ID of the database. You can call the [SearchDatabases](~~141876~~) operation to query the ID of the database.
     *
     * >  You can call this operation to query only physical databases. This operation is unavailable to query logical databases.
     * @example 123321
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The name of the project.
     *
     * @example SQL review for xxx
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'attachmentKeyList' => 'AttachmentKeyList',
        'dbId'              => 'DbId',
        'projectName'       => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentKeyList) {
            $res['AttachmentKeyList'] = $this->attachmentKeyList;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentKeyList'])) {
            if (!empty($map['AttachmentKeyList'])) {
                $model->attachmentKeyList = $map['AttachmentKeyList'];
            }
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
