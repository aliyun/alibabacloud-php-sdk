<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\CreateFunctionResponseBody\spec;
use AlibabaCloud\Tea\Model;

class CreateFunctionResponseBody extends Model
{
    /**
     * @example 2021-11-18T08:02:33.954Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $desc;

    /**
     * @example 021-11-18T08:02:33.954Z
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @example demoFunction
     *
     * @var string
     */
    public $name;

    /**
     * @example E63E7F4F-8538-5B0E-8712-78F92B6DCB9C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var spec
     */
    public $spec;
    protected $_name = [
        'createdAt'  => 'CreatedAt',
        'desc'       => 'Desc',
        'modifiedAt' => 'ModifiedAt',
        'name'       => 'Name',
        'requestId'  => 'RequestId',
        'spec'       => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
