<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentAnalyzeTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $tokenCount;
    protected $_name = [
        'imageCount' => 'image_count',
        'tableCount' => 'table_count',
        'tokenCount' => 'token_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['image_count'] = $this->imageCount;
        }

        if (null !== $this->tableCount) {
            $res['table_count'] = $this->tableCount;
        }

        if (null !== $this->tokenCount) {
            $res['token_count'] = $this->tokenCount;
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
        if (isset($map['image_count'])) {
            $model->imageCount = $map['image_count'];
        }

        if (isset($map['table_count'])) {
            $model->tableCount = $map['table_count'];
        }

        if (isset($map['token_count'])) {
            $model->tokenCount = $map['token_count'];
        }

        return $model;
    }
}
