<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLocationInfoResponseBody;

use AlibabaCloud\Dara\Model;

class cnList extends Model
{
    /**
     * @var string
     */
    public $locId;

    /**
     * @var string
     */
    public $locName;
    protected $_name = [
        'locId' => 'LocId',
        'locName' => 'LocName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locId) {
            $res['LocId'] = $this->locId;
        }

        if (null !== $this->locName) {
            $res['LocName'] = $this->locName;
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
        if (isset($map['LocId'])) {
            $model->locId = $map['LocId'];
        }

        if (isset($map['LocName'])) {
            $model->locName = $map['LocName'];
        }

        return $model;
    }
}
