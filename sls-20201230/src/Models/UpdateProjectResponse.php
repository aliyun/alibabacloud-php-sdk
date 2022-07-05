<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectResponse extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'headers'    => 'headers',
        'statusCode' => 'statusCode',
    ];

    public function validate()
    {
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('statusCode', $this->statusCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        return $model;
    }
}
