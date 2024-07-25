<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList;

use AlibabaCloud\Tea\Model;

class paramMapsList extends Model
{
    /**
     * @example name
     *
     * @var string
     */
    public $extractKey;

    /**
     * @example ALL_QUERY_PARAMETER
     *
     * @var string
     */
    public $extractKeySpec;

    /**
     * @example java.lang.String
     *
     * @var string
     */
    public $mappingType;
    protected $_name = [
        'extractKey'     => 'extractKey',
        'extractKeySpec' => 'extractKeySpec',
        'mappingType'    => 'mappingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extractKey) {
            $res['extractKey'] = $this->extractKey;
        }
        if (null !== $this->extractKeySpec) {
            $res['extractKeySpec'] = $this->extractKeySpec;
        }
        if (null !== $this->mappingType) {
            $res['mappingType'] = $this->mappingType;
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
        if (isset($map['extractKey'])) {
            $model->extractKey = $map['extractKey'];
        }
        if (isset($map['extractKeySpec'])) {
            $model->extractKeySpec = $map['extractKeySpec'];
        }
        if (isset($map['mappingType'])) {
            $model->mappingType = $map['mappingType'];
        }

        return $model;
    }
}
