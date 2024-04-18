<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitRepositoriesResponseBody\gitRepos;
use AlibabaCloud\Tea\Model;

class ListGitRepositoriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var gitRepos[]
     */
    public $gitRepos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'gitRepos'  => 'GitRepos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->gitRepos) {
            $res['GitRepos'] = [];
            if (null !== $this->gitRepos && \is_array($this->gitRepos)) {
                $n = 0;
                foreach ($this->gitRepos as $item) {
                    $res['GitRepos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGitRepositoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GitRepos'])) {
            if (!empty($map['GitRepos'])) {
                $model->gitRepos = [];
                $n               = 0;
                foreach ($map['GitRepos'] as $item) {
                    $model->gitRepos[$n++] = null !== $item ? gitRepos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
