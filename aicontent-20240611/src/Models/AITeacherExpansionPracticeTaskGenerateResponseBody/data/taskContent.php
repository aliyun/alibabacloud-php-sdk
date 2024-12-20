<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskContent extends Model
{
    /**
     * @example Why might some people think dog walking is a great job?
     *
     * @var string
     */
    public $assistant;

    /**
     * @example They think it\\"s great because they won\\"t be stuck in an office.
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant' => 'assistant',
        'user'      => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['assistant'] = $this->assistant;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistant'])) {
            $model->assistant = $map['assistant'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
