<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListContactResponseBody\contactList;
use AlibabaCloud\Tea\Model;

class ListContactResponseBody extends Model
{
    /**
     * @description The contacts.
     *
     * @var contactList[]
     */
    public $contactList;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The keyword used in the fuzzy search.
     *
     * @example 186
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The request ID.
     *
     * @example 31C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of certificates per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'contactList' => 'ContactList',
        'currentPage' => 'CurrentPage',
        'keyword'     => 'Keyword',
        'requestId'   => 'RequestId',
        'showSize'    => 'ShowSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactList) {
            $res['ContactList'] = [];
            if (null !== $this->contactList && \is_array($this->contactList)) {
                $n = 0;
                foreach ($this->contactList as $item) {
                    $res['ContactList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListContactResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactList'])) {
            if (!empty($map['ContactList'])) {
                $model->contactList = [];
                $n                  = 0;
                foreach ($map['ContactList'] as $item) {
                    $model->contactList[$n++] = null !== $item ? contactList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
