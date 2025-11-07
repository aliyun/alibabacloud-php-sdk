<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListGitAccountsResponseBody\gitAccounts;

class ListGitAccountsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var gitAccounts[]
     */
    public $gitAccounts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'gitAccounts' => 'GitAccounts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->gitAccounts)) {
            Model::validateArray($this->gitAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->gitAccounts) {
            if (\is_array($this->gitAccounts)) {
                $res['GitAccounts'] = [];
                $n1 = 0;
                foreach ($this->gitAccounts as $item1) {
                    $res['GitAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['GitAccounts'])) {
            if (!empty($map['GitAccounts'])) {
                $model->gitAccounts = [];
                $n1 = 0;
                foreach ($map['GitAccounts'] as $item1) {
                    $model->gitAccounts[$n1] = gitAccounts::fromMap($item1);
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
