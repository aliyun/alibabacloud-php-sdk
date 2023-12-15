<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewResponseBody\result\accounts;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @var bool
     */
    public $consortiumAdmin;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'accounts'        => 'Accounts',
        'consortiumAdmin' => 'ConsortiumAdmin',
        'pagination'      => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = [];
            if (null !== $this->accounts && \is_array($this->accounts)) {
                $n = 0;
                foreach ($this->accounts as $item) {
                    $res['Accounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->consortiumAdmin) {
            $res['ConsortiumAdmin'] = $this->consortiumAdmin;
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n               = 0;
                foreach ($map['Accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConsortiumAdmin'])) {
            $model->consortiumAdmin = $map['ConsortiumAdmin'];
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
