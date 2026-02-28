<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO\requestParams;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO\responseParams;

class sqlTemplateDTO extends Model
{
    /**
     * @var string
     */
    public $originSql;

    /**
     * @var requestParams
     */
    public $requestParams;

    /**
     * @var responseParams
     */
    public $responseParams;

    /**
     * @var string
     */
    public $templateSql;
    protected $_name = [
        'originSql' => 'OriginSql',
        'requestParams' => 'RequestParams',
        'responseParams' => 'ResponseParams',
        'templateSql' => 'TemplateSql',
    ];

    public function validate()
    {
        if (null !== $this->requestParams) {
            $this->requestParams->validate();
        }
        if (null !== $this->responseParams) {
            $this->responseParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originSql) {
            $res['OriginSql'] = $this->originSql;
        }

        if (null !== $this->requestParams) {
            $res['RequestParams'] = null !== $this->requestParams ? $this->requestParams->toArray($noStream) : $this->requestParams;
        }

        if (null !== $this->responseParams) {
            $res['ResponseParams'] = null !== $this->responseParams ? $this->responseParams->toArray($noStream) : $this->responseParams;
        }

        if (null !== $this->templateSql) {
            $res['TemplateSql'] = $this->templateSql;
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
        if (isset($map['OriginSql'])) {
            $model->originSql = $map['OriginSql'];
        }

        if (isset($map['RequestParams'])) {
            $model->requestParams = requestParams::fromMap($map['RequestParams']);
        }

        if (isset($map['ResponseParams'])) {
            $model->responseParams = responseParams::fromMap($map['ResponseParams']);
        }

        if (isset($map['TemplateSql'])) {
            $model->templateSql = $map['TemplateSql'];
        }

        return $model;
    }
}
