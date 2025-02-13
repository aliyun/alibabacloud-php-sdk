<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponseBody;

use AlibabaCloud\Dara\Model;

class comments extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $userid;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'userid'     => 'Userid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->userid) {
            $res['Userid'] = $this->userid;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Userid'])) {
            $model->userid = $map['Userid'];
        }

        return $model;
    }
}
