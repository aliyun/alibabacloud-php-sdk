<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request\header;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request\parameters;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request\urlParams;
use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @example {\\"input\\": [\\"%{input}\\"], \\"input_type\\": \\"%{input_type}\\"}
     *
     * @var string
     */
    public $requestBody;

    /**
     * @var urlParams
     */
    public $urlParams;
    protected $_name = [
        'header' => 'header',
        'parameters' => 'parameters',
        'requestBody' => 'requestBody',
        'urlParams' => 'urlParams',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->requestBody) {
            $res['requestBody'] = $this->requestBody;
        }
        if (null !== $this->urlParams) {
            $res['urlParams'] = null !== $this->urlParams ? $this->urlParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }
        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }
        if (isset($map['requestBody'])) {
            $model->requestBody = $map['requestBody'];
        }
        if (isset($map['urlParams'])) {
            $model->urlParams = urlParams::fromMap($map['urlParams']);
        }

        return $model;
    }
}
