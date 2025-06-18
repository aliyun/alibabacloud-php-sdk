<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateSQLReviewOrderRequest;

use AlibabaCloud\Dara\Model;

class param extends Model
{
    /**
     * @var string[]
     */
    public $attachmentKeyList;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'attachmentKeyList' => 'AttachmentKeyList',
        'dbId' => 'DbId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (\is_array($this->attachmentKeyList)) {
            Model::validateArray($this->attachmentKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentKeyList) {
            if (\is_array($this->attachmentKeyList)) {
                $res['AttachmentKeyList'] = [];
                $n1 = 0;
                foreach ($this->attachmentKeyList as $item1) {
                    $res['AttachmentKeyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['AttachmentKeyList'])) {
            if (!empty($map['AttachmentKeyList'])) {
                $model->attachmentKeyList = [];
                $n1 = 0;
                foreach ($map['AttachmentKeyList'] as $item1) {
                    $model->attachmentKeyList[$n1] = $item1;
                    ++$n1;
                }
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
