<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetVccRequest extends Model
{
    /**
     * @description By default, popApi is not ignored and idempotent
     *
     * @example c5e3130a-d02f-11ec-a7d3-0242ac110005
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Paging Parameters: The current parameters are obsolete.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Paging Parameters: The current parameters are obsolete.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Paging Parameters: The current parameters are obsolete.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * This parameter is required.
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'enablePage'  => 'EnablePage',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'vccId'       => 'VccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVccRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }

        return $model;
    }
}
