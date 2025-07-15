<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request;

use AlibabaCloud\Tea\Model;

class miniDocs extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $index;

    /**
     * @example true
     *
     * @var bool
     */
    public $star;
    protected $_name = [
        'content' => 'Content',
        'index' => 'Index',
        'star' => 'Star',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->star) {
            $res['Star'] = $this->star;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return miniDocs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Star'])) {
            $model->star = $map['Star'];
        }

        return $model;
    }
}
