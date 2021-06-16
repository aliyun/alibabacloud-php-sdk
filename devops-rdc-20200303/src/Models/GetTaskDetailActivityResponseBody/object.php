<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailActivityResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $created;

    /**
     * @var mixed[]
     */
    public $content;
    protected $_name = [
        'updated' => 'Updated',
        'action'  => 'Action',
        'title'   => 'Title',
        'created' => 'Created',
        'content' => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
