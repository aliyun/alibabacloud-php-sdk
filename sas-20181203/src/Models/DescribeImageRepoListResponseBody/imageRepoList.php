<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponseBody;

use AlibabaCloud\Tea\Model;

class imageRepoList extends Model
{
    /**
     * @description Indicates whether the feature takes effect on the image repository. Valid values:
     *
     *   **add**: yes
     *   **del**: no
     *
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @description The name of the image repository.
     *
     * @example zeus
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     *
     * @example sas-script
     *
     * @var string
     */
    public $repoNamespace;
    protected $_name = [
        'flag'          => 'Flag',
        'repoName'      => 'RepoName',
        'repoNamespace' => 'RepoNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageRepoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }

        return $model;
    }
}
