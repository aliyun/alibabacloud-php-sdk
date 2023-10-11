<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsResponseBody;

use AlibabaCloud\Tea\Model;

class openHonors extends Model
{
    /**
     * @var string
     */
    public $honorDesc;

    /**
     * @example 21658579
     *
     * @var int
     */
    public $honorId;

    /**
     * @example https://xxxx.ali-cdn.com/jfejfi.jpg
     *
     * @var string
     */
    public $honorImgUrl;

    /**
     * @var string
     */
    public $honorName;

    /**
     * @example https://xxxx.ali-cdn.com/jfejfi.jpg
     *
     * @var string
     */
    public $honorPendantImgUrl;
    protected $_name = [
        'honorDesc'          => 'honorDesc',
        'honorId'            => 'honorId',
        'honorImgUrl'        => 'honorImgUrl',
        'honorName'          => 'honorName',
        'honorPendantImgUrl' => 'honorPendantImgUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honorDesc) {
            $res['honorDesc'] = $this->honorDesc;
        }
        if (null !== $this->honorId) {
            $res['honorId'] = $this->honorId;
        }
        if (null !== $this->honorImgUrl) {
            $res['honorImgUrl'] = $this->honorImgUrl;
        }
        if (null !== $this->honorName) {
            $res['honorName'] = $this->honorName;
        }
        if (null !== $this->honorPendantImgUrl) {
            $res['honorPendantImgUrl'] = $this->honorPendantImgUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openHonors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['honorDesc'])) {
            $model->honorDesc = $map['honorDesc'];
        }
        if (isset($map['honorId'])) {
            $model->honorId = $map['honorId'];
        }
        if (isset($map['honorImgUrl'])) {
            $model->honorImgUrl = $map['honorImgUrl'];
        }
        if (isset($map['honorName'])) {
            $model->honorName = $map['honorName'];
        }
        if (isset($map['honorPendantImgUrl'])) {
            $model->honorPendantImgUrl = $map['honorPendantImgUrl'];
        }

        return $model;
    }
}
