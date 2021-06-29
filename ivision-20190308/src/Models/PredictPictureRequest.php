<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class PredictPictureRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCode;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $resourceUrl;

    /**
     * @var string
     */
    public $customerData;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'algorithmCode' => 'AlgorithmCode',
        'ossPath'       => 'OssPath',
        'resourceUrl'   => 'ResourceUrl',
        'customerData'  => 'CustomerData',
        'imageUrl'      => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }
        if (null !== $this->customerData) {
            $res['CustomerData'] = $this->customerData;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }
        if (isset($map['CustomerData'])) {
            $model->customerData = $map['CustomerData'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
