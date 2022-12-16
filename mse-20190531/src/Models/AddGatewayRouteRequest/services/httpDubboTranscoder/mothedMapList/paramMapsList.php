<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\services\httpDubboTranscoder\mothedMapList;

use AlibabaCloud\Tea\Model;

class paramMapsList extends Model
{
    /**
     * @description The key extracted from the input parameter.
     *
     * @example name
     *
     * @var string
     */
    public $extractKey;

    /**
     * @description The position of the input parameter.
     *
     * > Valid values:
     *
     *   `ALL_QUERY_PARAMETER`: request parameter
     *
     *   `ALL_HEADER`: request header
     *   `ALL_PATH`: request path
     *   `ALL_BODY`: request body
     *
     * @example ALL_QUERY_PARAMETER
     *
     * @var string
     */
    public $extractKeySpec;

    /**
     * @description The type of the backend service parameter.
     *
     * @example java.lang.String
     *
     * @var string
     */
    public $mappingType;
    protected $_name = [
        'extractKey'     => 'ExtractKey',
        'extractKeySpec' => 'ExtractKeySpec',
        'mappingType'    => 'MappingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extractKey) {
            $res['ExtractKey'] = $this->extractKey;
        }
        if (null !== $this->extractKeySpec) {
            $res['ExtractKeySpec'] = $this->extractKeySpec;
        }
        if (null !== $this->mappingType) {
            $res['MappingType'] = $this->mappingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramMapsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtractKey'])) {
            $model->extractKey = $map['ExtractKey'];
        }
        if (isset($map['ExtractKeySpec'])) {
            $model->extractKeySpec = $map['ExtractKeySpec'];
        }
        if (isset($map['MappingType'])) {
            $model->mappingType = $map['MappingType'];
        }

        return $model;
    }
}
