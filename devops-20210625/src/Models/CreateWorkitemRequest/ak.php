<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest\ak\issue;
use AlibabaCloud\Tea\Model;

class ak extends Model
{
    /**
     * @var issue
     */
    public $issue;
    protected $_name = [
        'issue' => 'issue',
    ];

    public function validate()
    {
        Model::validateRequired('issue', $this->issue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issue) {
            $res['issue'] = null !== $this->issue ? $this->issue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ak
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['issue'])) {
            $model->issue = issue::fromMap($map['issue']);
        }

        return $model;
    }
}
