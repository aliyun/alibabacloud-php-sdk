<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class QueryKnowledgeBasesContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $mergeMethod;

    /**
     * @var string
     */
    public $mergeMethodArgsShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $rerankFactor;

    /**
     * @var string
     */
    public $sourceCollectionShrink;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'content' => 'Content',
        'DBInstanceId' => 'DBInstanceId',
        'mergeMethod' => 'MergeMethod',
        'mergeMethodArgsShrink' => 'MergeMethodArgs',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'rerankFactor' => 'RerankFactor',
        'sourceCollectionShrink' => 'SourceCollection',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->mergeMethod) {
            $res['MergeMethod'] = $this->mergeMethod;
        }

        if (null !== $this->mergeMethodArgsShrink) {
            $res['MergeMethodArgs'] = $this->mergeMethodArgsShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rerankFactor) {
            $res['RerankFactor'] = $this->rerankFactor;
        }

        if (null !== $this->sourceCollectionShrink) {
            $res['SourceCollection'] = $this->sourceCollectionShrink;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['MergeMethod'])) {
            $model->mergeMethod = $map['MergeMethod'];
        }

        if (isset($map['MergeMethodArgs'])) {
            $model->mergeMethodArgsShrink = $map['MergeMethodArgs'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RerankFactor'])) {
            $model->rerankFactor = $map['RerankFactor'];
        }

        if (isset($map['SourceCollection'])) {
            $model->sourceCollectionShrink = $map['SourceCollection'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
