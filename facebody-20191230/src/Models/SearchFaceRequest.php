<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SearchFaceRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $dbNames;
    protected $_name = [
        'dbName'   => 'DbName',
        'imageUrl' => 'ImageUrl',
        'limit'    => 'Limit',
        'dbNames'  => 'DbNames',
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
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceRequest
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
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }

        return $model;
    }
}
