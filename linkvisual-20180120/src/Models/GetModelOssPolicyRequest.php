<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetModelOssPolicyRequest extends Model
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
     * @var int
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $hardware;

    /**
     * @var string
     */
    public $modelPackageStandard;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'apiRevision'          => 'ApiRevision',
        'algorithmId'          => 'AlgorithmId',
        'hardware'             => 'Hardware',
        'modelPackageStandard' => 'ModelPackageStandard',
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
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->hardware) {
            $res['Hardware'] = $this->hardware;
        }
        if (null !== $this->modelPackageStandard) {
            $res['ModelPackageStandard'] = $this->modelPackageStandard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModelOssPolicyRequest
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
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['Hardware'])) {
            $model->hardware = $map['Hardware'];
        }
        if (isset($map['ModelPackageStandard'])) {
            $model->modelPackageStandard = $map['ModelPackageStandard'];
        }

        return $model;
    }
}
