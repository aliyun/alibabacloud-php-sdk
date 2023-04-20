<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListWebHostingFilesRequest extends Model
{
    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****\/test/error1.png
     *
     * @var string
     */
    public $marker;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example /
     *
     * @var string
     */
    public $prefix;

    /**
     * @example 0e16bb12-14af-4635-b24c-5ac1a9a*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'marker'   => 'Marker',
        'pageSize' => 'PageSize',
        'prefix'   => 'Prefix',
        'spaceId'  => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebHostingFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
