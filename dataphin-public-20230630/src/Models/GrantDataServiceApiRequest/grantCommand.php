<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest\grantCommand\devFieldList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest\grantCommand\prodFieldList;
use AlibabaCloud\Tea\Model;

class grantCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1021
     *
     * @var int
     */
    public $apiId;

    /**
     * @description AppID
     *
     * This parameter is required.
     *
     * @example 1201
     *
     * @var int
     */
    public $appId;

    /**
     * @var devFieldList[]
     */
    public $devFieldList;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30
     *
     * @var string
     */
    public $expireDate;

    /**
     * @var prodFieldList[]
     */
    public $prodFieldList;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'apiId' => 'ApiId',
        'appId' => 'AppId',
        'devFieldList' => 'DevFieldList',
        'expireDate' => 'ExpireDate',
        'prodFieldList' => 'ProdFieldList',
        'reason' => 'Reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->devFieldList) {
            $res['DevFieldList'] = [];
            if (null !== $this->devFieldList && \is_array($this->devFieldList)) {
                $n = 0;
                foreach ($this->devFieldList as $item) {
                    $res['DevFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->prodFieldList) {
            $res['ProdFieldList'] = [];
            if (null !== $this->prodFieldList && \is_array($this->prodFieldList)) {
                $n = 0;
                foreach ($this->prodFieldList as $item) {
                    $res['ProdFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DevFieldList'])) {
            if (!empty($map['DevFieldList'])) {
                $model->devFieldList = [];
                $n = 0;
                foreach ($map['DevFieldList'] as $item) {
                    $model->devFieldList[$n++] = null !== $item ? devFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ProdFieldList'])) {
            if (!empty($map['ProdFieldList'])) {
                $model->prodFieldList = [];
                $n = 0;
                foreach ($map['ProdFieldList'] as $item) {
                    $model->prodFieldList[$n++] = null !== $item ? prodFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
