<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class GetGitRepositoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $htmlUrl;

    /**
     * @var bool
     */
    public $isPrivate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'Description',
        'htmlUrl' => 'HtmlUrl',
        'isPrivate' => 'IsPrivate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->htmlUrl) {
            $res['HtmlUrl'] = $this->htmlUrl;
        }

        if (null !== $this->isPrivate) {
            $res['IsPrivate'] = $this->isPrivate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HtmlUrl'])) {
            $model->htmlUrl = $map['HtmlUrl'];
        }

        if (isset($map['IsPrivate'])) {
            $model->isPrivate = $map['IsPrivate'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
