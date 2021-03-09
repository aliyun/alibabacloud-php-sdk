<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryPageByApplyIdRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $applyId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;
    protected $_name = [
        'apiProduct'        => 'ApiProduct',
        'apiRevision'       => 'ApiRevision',
        'iotInstanceId'     => 'IotInstanceId',
        'pageSize'          => 'PageSize',
        'applyId'           => 'ApplyId',
        'currentPage'       => 'CurrentPage',
        'realTenantId'      => 'RealTenantId',
        'realTripartiteKey' => 'RealTripartiteKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPageByApplyIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }

        return $model;
    }
}
