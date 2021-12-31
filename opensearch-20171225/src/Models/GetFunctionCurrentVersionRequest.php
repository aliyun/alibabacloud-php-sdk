<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionCurrentVersionRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $modelType;
    protected $_name = [
        'category'     => 'category',
        'domain'       => 'domain',
        'functionType' => 'functionType',
        'modelType'    => 'modelType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionCurrentVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        return $model;
    }
}
