<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\routeServices\httpDubboTranscoder\mothedMapList;

use AlibabaCloud\Dara\Model;

class paramMapsList extends Model
{
    /**
     * @var string
     */
    public $extractKey;
    /**
     * @var string
     */
    public $extractKeySpec;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
