<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribePopApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $popCode;
    protected $_name = [
        'apiName' => 'ApiName',
        'apiVersion' => 'ApiVersion',
        'popCode' => 'PopCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
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
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }

        return $model;
    }
}
