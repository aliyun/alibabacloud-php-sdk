<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest\mergeMethodArgs;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryKnowledgeBasesContentRequest\sourceCollection;

class QueryKnowledgeBasesContentRequest extends Model
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
     * @var mergeMethodArgs
     */
    public $mergeMethodArgs;

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
     * @var sourceCollection[]
     */
    public $sourceCollection;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'content' => 'Content',
        'DBInstanceId' => 'DBInstanceId',
        'mergeMethod' => 'MergeMethod',
        'mergeMethodArgs' => 'MergeMethodArgs',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'rerankFactor' => 'RerankFactor',
        'sourceCollection' => 'SourceCollection',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        if (null !== $this->mergeMethodArgs) {
            $this->mergeMethodArgs->validate();
        }
        if (\is_array($this->sourceCollection)) {
            Model::validateArray($this->sourceCollection);
        }
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

        if (null !== $this->mergeMethodArgs) {
            $res['MergeMethodArgs'] = null !== $this->mergeMethodArgs ? $this->mergeMethodArgs->toArray($noStream) : $this->mergeMethodArgs;
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

        if (null !== $this->sourceCollection) {
            if (\is_array($this->sourceCollection)) {
                $res['SourceCollection'] = [];
                $n1 = 0;
                foreach ($this->sourceCollection as $item1) {
                    $res['SourceCollection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->mergeMethodArgs = mergeMethodArgs::fromMap($map['MergeMethodArgs']);
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
            if (!empty($map['SourceCollection'])) {
                $model->sourceCollection = [];
                $n1 = 0;
                foreach ($map['SourceCollection'] as $item1) {
                    $model->sourceCollection[$n1] = sourceCollection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
