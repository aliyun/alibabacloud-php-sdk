<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsResponseBody\databaseAccounts;
use AlibabaCloud\Tea\Model;

class ListDatabaseAccountsResponseBody extends Model
{
    /**
     * @description The returned database accounts.
     *
     * @var databaseAccounts[]
     */
    public $databaseAccounts;

    /**
     * @description The request ID.
     *
     * @example 4F6C075F-FC86-476E-943B-097BD4E12948
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of database accounts returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'databaseAccounts' => 'DatabaseAccounts',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccounts) {
            $res['DatabaseAccounts'] = [];
            if (null !== $this->databaseAccounts && \is_array($this->databaseAccounts)) {
                $n = 0;
                foreach ($this->databaseAccounts as $item) {
                    $res['DatabaseAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccounts'])) {
            if (!empty($map['DatabaseAccounts'])) {
                $model->databaseAccounts = [];
                $n                       = 0;
                foreach ($map['DatabaseAccounts'] as $item) {
                    $model->databaseAccounts[$n++] = null !== $item ? databaseAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
