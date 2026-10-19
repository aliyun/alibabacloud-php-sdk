<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetMemoryDetailResponseBody;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $exists;

    /**
     * @var int
     */
    public $gmtModified;
    protected $_name = [
        'content' => 'content',
        'exists' => 'exists',
        'gmtModified' => 'gmtModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->exists) {
            $res['exists'] = $this->exists;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['exists'])) {
            $model->exists = $map['exists'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        return $model;
    }
}
