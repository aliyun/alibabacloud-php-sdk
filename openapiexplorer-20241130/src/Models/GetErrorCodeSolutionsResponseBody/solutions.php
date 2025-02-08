<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsResponseBody;

use AlibabaCloud\Dara\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $product;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'content'      => 'content',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'product'      => 'product',
        'productName'  => 'productName',
        'solutionId'   => 'solutionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->solutionId) {
            $res['solutionId'] = $this->solutionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['solutionId'])) {
            $model->solutionId = $map['solutionId'];
        }

        return $model;
    }
}
