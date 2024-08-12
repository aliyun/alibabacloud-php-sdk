<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

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
        'dirPrefix'       => 'DirPrefix',
        'isDedicatedLine' => 'IsDedicatedLine',
        'region'          => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetFbOssConfigRequest
     */
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
