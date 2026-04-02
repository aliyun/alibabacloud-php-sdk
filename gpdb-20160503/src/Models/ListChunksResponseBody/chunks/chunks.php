<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListChunksResponseBody\chunks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListChunksResponseBody\chunks\chunks\vector;

class chunks extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $loaderMetadata;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var vector
     */
    public $vector;
    protected $_name = [
        'content' => 'Content',
        'fileName' => 'FileName',
        'id' => 'Id',
        'loaderMetadata' => 'LoaderMetadata',
        'metadata' => 'Metadata',
        'pageIndex' => 'PageIndex',
        'vector' => 'Vector',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->vector) {
            $this->vector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->loaderMetadata) {
            $res['LoaderMetadata'] = $this->loaderMetadata;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->vector) {
            $res['Vector'] = null !== $this->vector ? $this->vector->toArray($noStream) : $this->vector;
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

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LoaderMetadata'])) {
            $model->loaderMetadata = $map['LoaderMetadata'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['Vector'])) {
            $model->vector = vector::fromMap($map['Vector']);
        }

        return $model;
    }
}
