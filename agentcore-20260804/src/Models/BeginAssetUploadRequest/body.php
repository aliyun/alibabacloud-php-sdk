<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\BeginAssetUploadRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BeginAssetUploadRequest\body\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\BeginAssetUploadRequest\body\metadata;

class body extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var chunkConfiguration
     */
    public $chunkConfiguration;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var metadata[]
     */
    public $metadata;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $sourceETag;

    /**
     * @var int
     */
    public $sourceModifiedTime;

    /**
     * @var string
     */
    public $sourceUri;
    protected $_name = [
        'assetId' => 'assetId',
        'chunkConfiguration' => 'chunkConfiguration',
        'contentType' => 'contentType',
        'fileName' => 'fileName',
        'metadata' => 'metadata',
        'overwrite' => 'overwrite',
        'sourceETag' => 'sourceETag',
        'sourceModifiedTime' => 'sourceModifiedTime',
        'sourceUri' => 'sourceUri',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                $n1 = 0;
                foreach ($this->metadata as $item1) {
                    $res['metadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }

        if (null !== $this->sourceETag) {
            $res['sourceETag'] = $this->sourceETag;
        }

        if (null !== $this->sourceModifiedTime) {
            $res['sourceModifiedTime'] = $this->sourceModifiedTime;
        }

        if (null !== $this->sourceUri) {
            $res['sourceUri'] = $this->sourceUri;
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
        if (isset($map['assetId'])) {
            $model->assetId = $map['assetId'];
        }

        if (isset($map['chunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['chunkConfiguration']);
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                $n1 = 0;
                foreach ($map['metadata'] as $item1) {
                    $model->metadata[$n1] = metadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['overwrite'])) {
            $model->overwrite = $map['overwrite'];
        }

        if (isset($map['sourceETag'])) {
            $model->sourceETag = $map['sourceETag'];
        }

        if (isset($map['sourceModifiedTime'])) {
            $model->sourceModifiedTime = $map['sourceModifiedTime'];
        }

        if (isset($map['sourceUri'])) {
            $model->sourceUri = $map['sourceUri'];
        }

        return $model;
    }
}
