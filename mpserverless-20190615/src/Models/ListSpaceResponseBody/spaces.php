<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceResponseBody;

use AlibabaCloud\Tea\Model;

class spaces extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example 1582018007000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1582018007000
     *
     * @var int
     */
    public $gmtLastAccess;

    /**
     * @example myspace
     *
     * @var string
     */
    public $name;

    /**
     * @example 368ef42a-763f-0000-acc2-8aa9564c****
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example IN_SERVICE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'desc'          => 'Desc',
        'gmtCreate'     => 'GmtCreate',
        'gmtLastAccess' => 'GmtLastAccess',
        'name'          => 'Name',
        'spaceId'       => 'SpaceId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtLastAccess) {
            $res['GmtLastAccess'] = $this->gmtLastAccess;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtLastAccess'])) {
            $model->gmtLastAccess = $map['GmtLastAccess'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
