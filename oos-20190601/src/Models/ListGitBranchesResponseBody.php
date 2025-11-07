<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitBranchesResponseBody\gitBranches;

class ListGitBranchesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var gitBranches[]
     */
    public $gitBranches;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'gitBranches' => 'GitBranches',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->gitBranches)) {
            Model::validateArray($this->gitBranches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->gitBranches) {
            if (\is_array($this->gitBranches)) {
                $res['GitBranches'] = [];
                $n1 = 0;
                foreach ($this->gitBranches as $item1) {
                    $res['GitBranches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['GitBranches'])) {
            if (!empty($map['GitBranches'])) {
                $model->gitBranches = [];
                $n1 = 0;
                foreach ($map['GitBranches'] as $item1) {
                    $model->gitBranches[$n1] = gitBranches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
