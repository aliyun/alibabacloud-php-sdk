<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccessInstanceZoneListRequest extends Model
{
    /**
     * @var string
     */
    public $accessInstanceType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'accessInstanceType' => 'AccessInstanceType',
        'lang' => 'Lang',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInstanceType) {
            $res['AccessInstanceType'] = $this->accessInstanceType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceType'])) {
            $model->accessInstanceType = $map['AccessInstanceType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
