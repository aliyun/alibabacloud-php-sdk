<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetPcrInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp when the report was created. The timestamp is in milliseconds.
     *
     * @example 1709109790532
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Report name
     *
     * @example report name
     *
     * @var string
     */
    public $name;

    /**
     * @description Download url link.
     *
     * @example https://energy.alibabacloud.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime' => 'createTime',
        'name'       => 'name',
        'url'        => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
