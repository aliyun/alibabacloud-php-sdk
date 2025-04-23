<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\request\header;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\request\parameters;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListModelsResponseBody\result\content\request\urlParams;

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

    public function validate()
    {
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (null !== $this->urlParams) {
            $this->urlParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->requestBody) {
            $res['requestBody'] = $this->requestBody;
        }

        if (null !== $this->urlParams) {
            $res['urlParams'] = null !== $this->urlParams ? $this->urlParams->toArray($noStream) : $this->urlParams;
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
