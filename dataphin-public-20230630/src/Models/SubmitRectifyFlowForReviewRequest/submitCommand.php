<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitRectifyFlowForReviewRequest;

use AlibabaCloud\Dara\Model;

class submitCommand extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $rectifyId;
    protected $_name = [
        'comment' => 'Comment',
        'rectifyId' => 'RectifyId',
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

        return $model;
    }
}
