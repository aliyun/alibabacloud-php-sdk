<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleInfoResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $sampleTags;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $sampleValue;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'id'          => 'id',
        'sampleTags'  => 'sampleTags',
        'sampleType'  => 'sampleType',
        'sampleValue' => 'sampleValue',
        'updateTime'  => 'updateTime',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->sampleTags) {
            $res['sampleTags'] = $this->sampleTags;
        }
        if (null !== $this->sampleType) {
            $res['sampleType'] = $this->sampleType;
        }
        if (null !== $this->sampleValue) {
            $res['sampleValue'] = $this->sampleValue;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['sampleTags'])) {
            $model->sampleTags = $map['sampleTags'];
        }
        if (isset($map['sampleType'])) {
            $model->sampleType = $map['sampleType'];
        }
        if (isset($map['sampleValue'])) {
            $model->sampleValue = $map['sampleValue'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
