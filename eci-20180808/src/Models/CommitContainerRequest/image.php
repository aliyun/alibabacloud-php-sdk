<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The authorization of the image.
     *
     * @example ECI
     *
     * @var string
     */
    public $author;

    /**
     * @description The message about the image.
     *
     * @example test commit
     *
     * @var string
     */
    public $message;

    /**
     * @description The image repository.
     *
     * This parameter is required.
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/eastest/registry-test
     *
     * @var string
     */
    public $repository;

    /**
     * @description The tag of the image. This parameter is empty by default, which indicates that the tag is not modified.
     *
     * This parameter is required.
     * @example 0.0.6
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'author'     => 'Author',
        'message'    => 'Message',
        'repository' => 'Repository',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
