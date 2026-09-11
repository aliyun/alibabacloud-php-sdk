<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\RetrievalKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RetrievalKnowledgeBaseResponseBody\results\imageResources;

class results extends Model
{
    /**
     * @var string[]
     */
    public $captions;

    /**
     * @var string[]
     */
    public $docItems;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string[]
     */
    public $headings;

    /**
     * @var imageResources[]
     */
    public $imageResources;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var int[]
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $shardContent;

    /**
     * @var int
     */
    public $shardIndex;

    /**
     * @var float
     */
    public $similarityScore;
    protected $_name = [
        'captions' => 'Captions',
        'docItems' => 'DocItems',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'headings' => 'Headings',
        'imageResources' => 'ImageResources',
        'metadata' => 'Metadata',
        'pageNumbers' => 'PageNumbers',
        'shardContent' => 'ShardContent',
        'shardIndex' => 'ShardIndex',
        'similarityScore' => 'SimilarityScore',
    ];

    public function validate()
    {
        if (\is_array($this->captions)) {
            Model::validateArray($this->captions);
        }
        if (\is_array($this->docItems)) {
            Model::validateArray($this->docItems);
        }
        if (\is_array($this->headings)) {
            Model::validateArray($this->headings);
        }
        if (\is_array($this->imageResources)) {
            Model::validateArray($this->imageResources);
        }
        if (\is_array($this->pageNumbers)) {
            Model::validateArray($this->pageNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captions) {
            if (\is_array($this->captions)) {
                $res['Captions'] = [];
                $n1 = 0;
                foreach ($this->captions as $item1) {
                    $res['Captions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docItems) {
            if (\is_array($this->docItems)) {
                $res['DocItems'] = [];
                $n1 = 0;
                foreach ($this->docItems as $item1) {
                    $res['DocItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->headings) {
            if (\is_array($this->headings)) {
                $res['Headings'] = [];
                $n1 = 0;
                foreach ($this->headings as $item1) {
                    $res['Headings'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageResources) {
            if (\is_array($this->imageResources)) {
                $res['ImageResources'] = [];
                $n1 = 0;
                foreach ($this->imageResources as $item1) {
                    $res['ImageResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->pageNumbers) {
            if (\is_array($this->pageNumbers)) {
                $res['PageNumbers'] = [];
                $n1 = 0;
                foreach ($this->pageNumbers as $item1) {
                    $res['PageNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shardContent) {
            $res['ShardContent'] = $this->shardContent;
        }

        if (null !== $this->shardIndex) {
            $res['ShardIndex'] = $this->shardIndex;
        }

        if (null !== $this->similarityScore) {
            $res['SimilarityScore'] = $this->similarityScore;
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
        if (isset($map['Captions'])) {
            if (!empty($map['Captions'])) {
                $model->captions = [];
                $n1 = 0;
                foreach ($map['Captions'] as $item1) {
                    $model->captions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocItems'])) {
            if (!empty($map['DocItems'])) {
                $model->docItems = [];
                $n1 = 0;
                foreach ($map['DocItems'] as $item1) {
                    $model->docItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Headings'])) {
            if (!empty($map['Headings'])) {
                $model->headings = [];
                $n1 = 0;
                foreach ($map['Headings'] as $item1) {
                    $model->headings[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageResources'])) {
            if (!empty($map['ImageResources'])) {
                $model->imageResources = [];
                $n1 = 0;
                foreach ($map['ImageResources'] as $item1) {
                    $model->imageResources[$n1] = imageResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['PageNumbers'])) {
            if (!empty($map['PageNumbers'])) {
                $model->pageNumbers = [];
                $n1 = 0;
                foreach ($map['PageNumbers'] as $item1) {
                    $model->pageNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShardContent'])) {
            $model->shardContent = $map['ShardContent'];
        }

        if (isset($map['ShardIndex'])) {
            $model->shardIndex = $map['ShardIndex'];
        }

        if (isset($map['SimilarityScore'])) {
            $model->similarityScore = $map['SimilarityScore'];
        }

        return $model;
    }
}
