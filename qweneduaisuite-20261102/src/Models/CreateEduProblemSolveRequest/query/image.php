<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest\query;

use AlibabaCloud\Dara\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $base64;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'base64' => 'base64',
        'format' => 'format',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->base64) {
            $res['base64'] = $this->base64;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['base64'])) {
            $model->base64 = $map['base64'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
