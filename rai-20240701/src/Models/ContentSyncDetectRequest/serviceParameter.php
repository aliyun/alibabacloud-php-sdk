<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ContentSyncDetectRequest;

use AlibabaCloud\Tea\Model;

class serviceParameter extends Model
{
    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'content' => 'content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        return $model;
    }
}
