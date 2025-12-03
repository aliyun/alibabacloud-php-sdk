<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponseBody;

use AlibabaCloud\Dara\Model;

class log extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $more;
    protected $_name = [
        'content' => 'content',
        'more' => 'more',
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

        if (null !== $this->more) {
            $res['more'] = $this->more;
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

        if (isset($map['more'])) {
            $model->more = $map['more'];
        }

        return $model;
    }
}
