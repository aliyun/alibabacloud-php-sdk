<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListChangeOrdersRequest extends Model
{
    /**
     * @description 1
     *
     * This parameter is required.
     * @example 145341c-9708-4967-b3ec-24933767****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the request.
     *
     * @example 2
     *
     * @var string
     */
    public $coStatus;

    /**
     * @description 2
     *
     * @example CoCreateApp
     *
     * @var string
     */
    public $coType;

    /**
     * @description 20
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description CoCreateApp
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description test
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId'       => 'AppId',
        'coStatus'    => 'CoStatus',
        'coType'      => 'CoType',
        'currentPage' => 'CurrentPage',
        'key'         => 'Key',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coStatus) {
            $res['CoStatus'] = $this->coStatus;
        }
        if (null !== $this->coType) {
            $res['CoType'] = $this->coType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoStatus'])) {
            $model->coStatus = $map['CoStatus'];
        }
        if (isset($map['CoType'])) {
            $model->coType = $map['CoType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
