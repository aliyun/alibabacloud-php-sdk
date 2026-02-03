<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig;

use AlibabaCloud\Dara\Model;

class searchSourceConfig extends Model
{
    /**
     * @var bool
     */
    public $metadataKeyValueGenerateEnable;

    /**
     * @var bool
     */
    public $metadataKeyValueSearchEnable;

    /**
     * @var bool
     */
    public $tagGenerateEnable;

    /**
     * @var bool
     */
    public $tagSearchEnable;
    protected $_name = [
        'metadataKeyValueGenerateEnable' => 'MetadataKeyValueGenerateEnable',
        'metadataKeyValueSearchEnable' => 'MetadataKeyValueSearchEnable',
        'tagGenerateEnable' => 'TagGenerateEnable',
        'tagSearchEnable' => 'TagSearchEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadataKeyValueGenerateEnable) {
            $res['MetadataKeyValueGenerateEnable'] = $this->metadataKeyValueGenerateEnable;
        }

        if (null !== $this->metadataKeyValueSearchEnable) {
            $res['MetadataKeyValueSearchEnable'] = $this->metadataKeyValueSearchEnable;
        }

        if (null !== $this->tagGenerateEnable) {
            $res['TagGenerateEnable'] = $this->tagGenerateEnable;
        }

        if (null !== $this->tagSearchEnable) {
            $res['TagSearchEnable'] = $this->tagSearchEnable;
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
        if (isset($map['MetadataKeyValueGenerateEnable'])) {
            $model->metadataKeyValueGenerateEnable = $map['MetadataKeyValueGenerateEnable'];
        }

        if (isset($map['MetadataKeyValueSearchEnable'])) {
            $model->metadataKeyValueSearchEnable = $map['MetadataKeyValueSearchEnable'];
        }

        if (isset($map['TagGenerateEnable'])) {
            $model->tagGenerateEnable = $map['TagGenerateEnable'];
        }

        if (isset($map['TagSearchEnable'])) {
            $model->tagSearchEnable = $map['TagSearchEnable'];
        }

        return $model;
    }
}
