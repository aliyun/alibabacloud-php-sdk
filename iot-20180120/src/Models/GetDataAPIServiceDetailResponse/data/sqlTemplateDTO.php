<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\requestParams;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\responseParams;
use AlibabaCloud\Tea\Model;

class sqlTemplateDTO extends Model
{
    /**
     * @var string
     */
    public $originSql;

    /**
     * @var string
     */
    public $templateSql;

    /**
     * @var requestParams
     */
    public $requestParams;

    /**
     * @var responseParams
     */
    public $responseParams;
    protected $_name = [
        'originSql'      => 'OriginSql',
        'templateSql'    => 'TemplateSql',
        'requestParams'  => 'RequestParams',
        'responseParams' => 'ResponseParams',
    ];

    public function validate()
    {
        Model::validateRequired('originSql', $this->originSql, true);
        Model::validateRequired('templateSql', $this->templateSql, true);
        Model::validateRequired('requestParams', $this->requestParams, true);
        Model::validateRequired('responseParams', $this->responseParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originSql) {
            $res['OriginSql'] = $this->originSql;
        }
        if (null !== $this->templateSql) {
            $res['TemplateSql'] = $this->templateSql;
        }
        if (null !== $this->requestParams) {
            $res['RequestParams'] = null !== $this->requestParams ? $this->requestParams->toMap() : null;
        }
        if (null !== $this->responseParams) {
            $res['ResponseParams'] = null !== $this->responseParams ? $this->responseParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlTemplateDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginSql'])) {
            $model->originSql = $map['OriginSql'];
        }
        if (isset($map['TemplateSql'])) {
            $model->templateSql = $map['TemplateSql'];
        }
        if (isset($map['RequestParams'])) {
            $model->requestParams = requestParams::fromMap($map['RequestParams']);
        }
        if (isset($map['ResponseParams'])) {
            $model->responseParams = responseParams::fromMap($map['ResponseParams']);
        }

        return $model;
    }
}
