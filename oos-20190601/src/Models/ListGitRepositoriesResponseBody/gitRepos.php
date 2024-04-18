<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class gitRepos extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $htmlUrl;

    /**
     * @var bool
     */
    public $isPrivate;
    protected $_name = [
        'description' => 'Description',
        'fullName'    => 'FullName',
        'htmlUrl'     => 'HtmlUrl',
        'isPrivate'   => 'IsPrivate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->htmlUrl) {
            $res['HtmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->isPrivate) {
            $res['IsPrivate'] = $this->isPrivate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gitRepos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['HtmlUrl'])) {
            $model->htmlUrl = $map['HtmlUrl'];
        }
        if (isset($map['IsPrivate'])) {
            $model->isPrivate = $map['IsPrivate'];
        }

        return $model;
    }
}
