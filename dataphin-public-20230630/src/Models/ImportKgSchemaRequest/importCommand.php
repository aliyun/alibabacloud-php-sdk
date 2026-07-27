<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ImportKgSchemaRequest;

use AlibabaCloud\Dara\Model;

class importCommand extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $mergeStrategy;
    protected $_name = [
        'content' => 'Content',
        'inputFormat' => 'InputFormat',
        'mergeStrategy' => 'MergeStrategy',
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

        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }

        if (null !== $this->mergeStrategy) {
            $res['MergeStrategy'] = $this->mergeStrategy;
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

        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }

        if (isset($map['MergeStrategy'])) {
            $model->mergeStrategy = $map['MergeStrategy'];
        }

        return $model;
    }
}
