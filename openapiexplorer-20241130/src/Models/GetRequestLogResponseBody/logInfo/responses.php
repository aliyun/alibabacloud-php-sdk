<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponseBody\logInfo;

use AlibabaCloud\Dara\Model;

class responses extends Model
{
    /**
     * @var string
     */
    public $responseBody;

    /**
     * @var string
     */
    public $responseBodyFormat;
    protected $_name = [
        'responseBody' => 'responseBody',
        'responseBodyFormat' => 'responseBodyFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->responseBody) {
            $res['responseBody'] = $this->responseBody;
        }

        if (null !== $this->responseBodyFormat) {
            $res['responseBodyFormat'] = $this->responseBodyFormat;
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
        if (isset($map['responseBody'])) {
            $model->responseBody = $map['responseBody'];
        }

        if (isset($map['responseBodyFormat'])) {
            $model->responseBodyFormat = $map['responseBodyFormat'];
        }

        return $model;
    }
}
