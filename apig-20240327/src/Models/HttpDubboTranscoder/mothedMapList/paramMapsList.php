<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList;

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
        'extractKey'     => 'extractKey',
        'extractKeySpec' => 'extractKeySpec',
        'mappingType'    => 'mappingType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
