<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseChunksRequest\metaData;

class ListKnowledgeBaseChunksRequest extends Model
{
    /**
     * @var string
     */
    public $chunkStatus;

    /**
     * @var metaData
     */
    public $metaData;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'chunkStatus' => 'ChunkStatus',
        'metaData' => 'MetaData',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkStatus) {
            $res['ChunkStatus'] = $this->chunkStatus;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['ChunkStatus'])) {
            $model->chunkStatus = $map['ChunkStatus'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = metaData::fromMap($map['MetaData']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
