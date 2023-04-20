<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 2020-01-16T05:45:33.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2020-01-16T05:45:33.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example c568f23d-a46f-4866-xxxx-142e5eb3e174
     *
     * @var string
     */
    public $id;

    /**
     * @example 1579153532001.JPG
     *
     * @var string
     */
    public $name;

    /**
     * @example 1000
     *
     * @var int
     */
    public $size;

    /**
     * @example JPG
     *
     * @var string
     */
    public $type;

    /**
     * @example https://fbpxxx.cdn.bspapp.com/FBPSBVMO-myspace/68dbd670-3823-11ea-bfb9-xxxx.JPG
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
        'size'        => 'Size',
        'type'        => 'Type',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
