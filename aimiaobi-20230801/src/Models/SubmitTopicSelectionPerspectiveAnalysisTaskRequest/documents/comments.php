<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest\documents;

use AlibabaCloud\Tea\Model;

class comments extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'text' => 'Text',
        'username' => 'Username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return comments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
