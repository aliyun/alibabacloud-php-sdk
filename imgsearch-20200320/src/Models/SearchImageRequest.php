<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models;

use AlibabaCloud\Tea\Model;

class SearchImageRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imgsearch/SearchImage/SearchImage-ku8.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 5
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'dbName'   => 'DbName',
        'imageUrl' => 'ImageUrl',
        'limit'    => 'Limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
