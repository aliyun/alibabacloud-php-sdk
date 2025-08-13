<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataPageResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $dataTagType;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $lastSourceType;

    /**
     * @var string
     */
    public $updator;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'creator' => 'creator',
        'dataTagType' => 'dataTagType',
        'dataValue' => 'dataValue',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'lastSourceType' => 'lastSourceType',
        'updator' => 'updator',
        'uuid' => 'uuid',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->dataTagType) {
            $res['dataTagType'] = $this->dataTagType;
        }

        if (null !== $this->dataValue) {
            $res['dataValue'] = $this->dataValue;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lastSourceType) {
            $res['lastSourceType'] = $this->lastSourceType;
        }

        if (null !== $this->updator) {
            $res['updator'] = $this->updator;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['dataTagType'])) {
            $model->dataTagType = $map['dataTagType'];
        }

        if (isset($map['dataValue'])) {
            $model->dataValue = $map['dataValue'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['lastSourceType'])) {
            $model->lastSourceType = $map['lastSourceType'];
        }

        if (isset($map['updator'])) {
            $model->updator = $map['updator'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
