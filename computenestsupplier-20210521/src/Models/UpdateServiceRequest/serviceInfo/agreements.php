<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\serviceInfo;

use AlibabaCloud\Tea\Model;

class agreements extends Model
{
    /**
     * @description Protocol name.
     *
     * @example Name
     *
     * @var string
     */
    public $name;

    /**
     * @description Protocol url.
     *
     * @example https://aliyun.com/xxxxxxxx.html
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'name' => 'Name',
        'url'  => 'Url',
    ];

    public function validate()
    {
    }

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
