<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\serviceInfos;

use AlibabaCloud\Tea\Model;

class agreements extends Model
{
    /**
     * @description The agreement name.
     *
     * @example User agreement
     *
     * @var string
     */
    public $name;

    /**
     * @description The agreement URL.
     *
     * @example https://url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'name' => 'Name',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agreements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
