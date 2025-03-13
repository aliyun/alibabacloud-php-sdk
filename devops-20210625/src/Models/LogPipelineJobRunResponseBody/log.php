<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponseBody;

use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $content;

    /**
     * @example true
     *
     * @var bool
     */
    public $more;
    protected $_name = [
        'content' => 'content',
        'more'    => 'more',
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
        if (null !== $this->more) {
            $res['more'] = $this->more;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['more'])) {
            $model->more = $map['more'];
        }

        return $model;
    }
}
