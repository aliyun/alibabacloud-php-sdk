<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class ListIndexFileDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $documentStatus;

    /**
     * @var string
     */
    public $enableNameLike;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'documentName' => 'DocumentName',
        'documentStatus' => 'DocumentStatus',
        'enableNameLike' => 'EnableNameLike',
        'indexId' => 'IndexId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }

        if (null !== $this->documentStatus) {
            $res['DocumentStatus'] = $this->documentStatus;
        }

        if (null !== $this->enableNameLike) {
            $res['EnableNameLike'] = $this->enableNameLike;
        }

        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }

        if (isset($map['DocumentStatus'])) {
            $model->documentStatus = $map['DocumentStatus'];
        }

        if (isset($map['EnableNameLike'])) {
            $model->enableNameLike = $map['EnableNameLike'];
        }

        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
