<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitResponseBody\result;

use AlibabaCloud\Dara\Model;

class highlightTextMap extends Model
{
    /**
     * @var string
     */
    public $commitId;
    /**
     * @var string
     */
    public $commitMessage;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'commitId'       => 'commitId',
        'commitMessage'  => 'commitMessage',
        'organizationId' => 'organizationId',
        'title'          => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitId) {
            $res['commitId'] = $this->commitId;
        }

        if (null !== $this->commitMessage) {
            $res['commitMessage'] = $this->commitMessage;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['commitId'])) {
            $model->commitId = $map['commitId'];
        }

        if (isset($map['commitMessage'])) {
            $model->commitMessage = $map['commitMessage'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
