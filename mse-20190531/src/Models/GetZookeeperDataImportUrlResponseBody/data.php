<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetZookeeperDataImportUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description code
     *
     * @example 250000
     *
     * @var string
     */
    public $maxSize;

    /**
     * @description The maximum size of a file that can be uploaded each time. Unit: MB.
     *
     * @example http://xxxxxxxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'maxSize' => 'MaxSize',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
