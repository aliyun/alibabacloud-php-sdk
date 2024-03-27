<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\Tea\Model;

class DescribeProjectResponseBody extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $code;

    /**
     * @example this is a project description
     *
     * @var string
     */
    public $description;

    /**
     * @example test_project_name
     *
     * @var string
     */
    public $name;

    /**
     * @example req_id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'code',
        'description' => 'description',
        'name'        => 'name',
        'requestId'   => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
