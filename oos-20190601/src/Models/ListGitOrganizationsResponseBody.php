<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitOrganizationsResponseBody\gitOrgs;

class ListGitOrganizationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var gitOrgs[]
     */
    public $gitOrgs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'gitOrgs' => 'GitOrgs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->gitOrgs)) {
            Model::validateArray($this->gitOrgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->gitOrgs) {
            if (\is_array($this->gitOrgs)) {
                $res['GitOrgs'] = [];
                $n1 = 0;
                foreach ($this->gitOrgs as $item1) {
                    $res['GitOrgs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['GitOrgs'])) {
            if (!empty($map['GitOrgs'])) {
                $model->gitOrgs = [];
                $n1 = 0;
                foreach ($map['GitOrgs'] as $item1) {
                    $model->gitOrgs[$n1] = gitOrgs::fromMap($item1);
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
