<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListModelVersionsByPageRequest extends Model
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
    public $algorithmName;

    /**
     * @var string
     */
    public $sizeType;

    /**
     * @var string
     */
    public $modelPackageStandard;

    /**
     * @var string
     */
    public $hardware;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'apiRevision'          => 'ApiRevision',
        'algorithmName'        => 'AlgorithmName',
        'sizeType'             => 'SizeType',
        'modelPackageStandard' => 'ModelPackageStandard',
        'hardware'             => 'Hardware',
        'pageSize'             => 'PageSize',
        'currentPage'          => 'CurrentPage',
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
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->sizeType) {
            $res['SizeType'] = $this->sizeType;
        }
        if (null !== $this->modelPackageStandard) {
            $res['ModelPackageStandard'] = $this->modelPackageStandard;
        }
        if (null !== $this->hardware) {
            $res['Hardware'] = $this->hardware;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModelVersionsByPageRequest
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
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['SizeType'])) {
            $model->sizeType = $map['SizeType'];
        }
        if (isset($map['ModelPackageStandard'])) {
            $model->modelPackageStandard = $map['ModelPackageStandard'];
        }
        if (isset($map['Hardware'])) {
            $model->hardware = $map['Hardware'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
