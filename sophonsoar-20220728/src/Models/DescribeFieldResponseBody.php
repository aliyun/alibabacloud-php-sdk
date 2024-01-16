<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeFieldResponseBody extends Model
{
    /**
     * @description The configuration content.
     *
     * @example ["ip","name","hostinfo","md5"]
     *
     * @var string
     */
    public $fields;

    /**
     * @description The name of the global configuration.
     *
     * @example soar_filed_tags
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example BCDE6498-83CC-50A1-8307-3D5A539C42F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fields'    => 'Fields',
        'name'      => 'Name',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFieldResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
