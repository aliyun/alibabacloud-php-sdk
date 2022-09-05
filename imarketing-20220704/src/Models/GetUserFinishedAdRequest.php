<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class GetUserFinishedAdRequest extends Model
{
    /**
     * @var int
     */
    public $adid;

    /**
     * @var string
     */
    public $clicklink;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mediaid;

    /**
     * @var string
     */
    public $tagid;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'adid'      => 'Adid',
        'clicklink' => 'Clicklink',
        'id'        => 'Id',
        'mediaid'   => 'Mediaid',
        'tagid'     => 'Tagid',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adid) {
            $res['Adid'] = $this->adid;
        }
        if (null !== $this->clicklink) {
            $res['Clicklink'] = $this->clicklink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mediaid) {
            $res['Mediaid'] = $this->mediaid;
        }
        if (null !== $this->tagid) {
            $res['Tagid'] = $this->tagid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserFinishedAdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adid'])) {
            $model->adid = $map['Adid'];
        }
        if (isset($map['Clicklink'])) {
            $model->clicklink = $map['Clicklink'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mediaid'])) {
            $model->mediaid = $map['Mediaid'];
        }
        if (isset($map['Tagid'])) {
            $model->tagid = $map['Tagid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
