<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class OtsTableRestoreDetail extends Model
{
    /**
     * @var int
     */
    public $batchChannelCount;

    /**
     * @var string
     */
    public $indexNameSuffix;

    /**
     * @var bool
     */
    public $overwriteExisting;

    /**
     * @var bool
     */
    public $reGenerateAutoIncrementPK;

    /**
     * @var bool
     */
    public $restoreIndex;

    /**
     * @var bool
     */
    public $restoreSearchIndex;

    /**
     * @var string
     */
    public $searchIndexNameSuffix;
    protected $_name = [
        'batchChannelCount'         => 'BatchChannelCount',
        'indexNameSuffix'           => 'IndexNameSuffix',
        'overwriteExisting'         => 'OverwriteExisting',
        'reGenerateAutoIncrementPK' => 'ReGenerateAutoIncrementPK',
        'restoreIndex'              => 'RestoreIndex',
        'restoreSearchIndex'        => 'RestoreSearchIndex',
        'searchIndexNameSuffix'     => 'SearchIndexNameSuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchChannelCount) {
            $res['BatchChannelCount'] = $this->batchChannelCount;
        }
        if (null !== $this->indexNameSuffix) {
            $res['IndexNameSuffix'] = $this->indexNameSuffix;
        }
        if (null !== $this->overwriteExisting) {
            $res['OverwriteExisting'] = $this->overwriteExisting;
        }
        if (null !== $this->reGenerateAutoIncrementPK) {
            $res['ReGenerateAutoIncrementPK'] = $this->reGenerateAutoIncrementPK;
        }
        if (null !== $this->restoreIndex) {
            $res['RestoreIndex'] = $this->restoreIndex;
        }
        if (null !== $this->restoreSearchIndex) {
            $res['RestoreSearchIndex'] = $this->restoreSearchIndex;
        }
        if (null !== $this->searchIndexNameSuffix) {
            $res['SearchIndexNameSuffix'] = $this->searchIndexNameSuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OtsTableRestoreDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchChannelCount'])) {
            $model->batchChannelCount = $map['BatchChannelCount'];
        }
        if (isset($map['IndexNameSuffix'])) {
            $model->indexNameSuffix = $map['IndexNameSuffix'];
        }
        if (isset($map['OverwriteExisting'])) {
            $model->overwriteExisting = $map['OverwriteExisting'];
        }
        if (isset($map['ReGenerateAutoIncrementPK'])) {
            $model->reGenerateAutoIncrementPK = $map['ReGenerateAutoIncrementPK'];
        }
        if (isset($map['RestoreIndex'])) {
            $model->restoreIndex = $map['RestoreIndex'];
        }
        if (isset($map['RestoreSearchIndex'])) {
            $model->restoreSearchIndex = $map['RestoreSearchIndex'];
        }
        if (isset($map['SearchIndexNameSuffix'])) {
            $model->searchIndexNameSuffix = $map['SearchIndexNameSuffix'];
        }

        return $model;
    }
}
