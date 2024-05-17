<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListIdpDepartmentsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description This parameter is required.
     *
     * @example 1440
     *
     * @var string
     */
    public $idpConfigId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'idpConfigId' => 'IdpConfigId',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIdpDepartmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
