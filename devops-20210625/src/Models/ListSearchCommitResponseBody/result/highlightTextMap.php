<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitResponseBody\result;

use AlibabaCloud\Tea\Model;

class highlightTextMap extends Model
{
    /**
     * @example df1b701cb0f3f7ca92320d49d31995821f2d045c
     *
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $commitMessage;

    /**
     * @example 60de7a6852743a5162b5f957
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return highlightTextMap
     */
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
