<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class GetFbOssConfigRequest extends Model
{
    /**
     * @var string
     */
    public $dirPrefix;

    /**
     * @var int
     */
    public $isDedicatedLine;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'dirPrefix' => 'DirPrefix',
        'isDedicatedLine' => 'IsDedicatedLine',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dirPrefix) {
            $res['DirPrefix'] = $this->dirPrefix;
        }

        if (null !== $this->isDedicatedLine) {
            $res['IsDedicatedLine'] = $this->isDedicatedLine;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['DirPrefix'])) {
            $model->dirPrefix = $map['DirPrefix'];
        }

        if (isset($map['IsDedicatedLine'])) {
            $model->isDedicatedLine = $map['IsDedicatedLine'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
