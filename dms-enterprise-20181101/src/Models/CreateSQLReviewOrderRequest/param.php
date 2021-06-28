<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string[]
     */
    public $attachmentKeyList;
    protected $_name = [
        'projectName'       => 'ProjectName',
        'dbId'              => 'DbId',
        'attachmentKeyList' => 'AttachmentKeyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->attachmentKeyList) {
            $res['AttachmentKeyList'] = $this->attachmentKeyList;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['AttachmentKeyList'])) {
            if (!empty($map['AttachmentKeyList'])) {
                $model->attachmentKeyList = $map['AttachmentKeyList'];
            }
        }

        return $model;
    }
}
