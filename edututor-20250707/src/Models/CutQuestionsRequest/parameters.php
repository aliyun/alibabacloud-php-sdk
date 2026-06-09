<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduTutor\V20250707\Models\CutQuestionsRequest;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var bool
     */
    public $extractImages;

    /**
     * @var bool
     */
    public $struct;
    protected $_name = [
        'extractImages' => 'extract_images',
        'struct' => 'struct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extractImages) {
            $res['extract_images'] = $this->extractImages;
        }

        if (null !== $this->struct) {
            $res['struct'] = $this->struct;
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
        if (isset($map['extract_images'])) {
            $model->extractImages = $map['extract_images'];
        }

        if (isset($map['struct'])) {
            $model->struct = $map['struct'];
        }

        return $model;
    }
}
