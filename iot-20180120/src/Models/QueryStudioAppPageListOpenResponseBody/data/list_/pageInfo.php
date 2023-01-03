<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @example 2020-12-25T16:21Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-05-08T17:18Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 49739
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $isHidden;

    /**
     * @example 1
     *
     * @var int
     */
    public $isHome;

    /**
     * @example 1
     *
     * @var int
     */
    public $isLoginPage;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example 44920
     *
     * @var string
     */
    public $pageId;

    /**
     * @example /page/44920
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'isHidden'    => 'IsHidden',
        'isHome'      => 'IsHome',
        'isLoginPage' => 'IsLoginPage',
        'name'        => 'Name',
        'pageId'      => 'PageId',
        'path'        => 'Path',
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
        if (null !== $this->isHidden) {
            $res['IsHidden'] = $this->isHidden;
        }
        if (null !== $this->isHome) {
            $res['IsHome'] = $this->isHome;
        }
        if (null !== $this->isLoginPage) {
            $res['IsLoginPage'] = $this->isLoginPage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
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
        if (isset($map['IsHidden'])) {
            $model->isHidden = $map['IsHidden'];
        }
        if (isset($map['IsHome'])) {
            $model->isHome = $map['IsHome'];
        }
        if (isset($map['IsLoginPage'])) {
            $model->isLoginPage = $map['IsLoginPage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
