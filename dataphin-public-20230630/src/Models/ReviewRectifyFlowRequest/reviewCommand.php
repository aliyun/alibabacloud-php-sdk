<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ReviewRectifyFlowRequest;

use AlibabaCloud\Dara\Model;

class reviewCommand extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $rectifyId;

    /**
     * @var string
     */
    public $reviewResult;
    protected $_name = [
        'comment' => 'Comment',
        'rectifyId' => 'RectifyId',
        'reviewResult' => 'ReviewResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->rectifyId) {
            $res['RectifyId'] = $this->rectifyId;
        }

        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['RectifyId'])) {
            $model->rectifyId = $map['RectifyId'];
        }

        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }

        return $model;
    }
}
