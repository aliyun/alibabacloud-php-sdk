<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetRealNameStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $listMsisdnsShrink;
    protected $_name = [
        'iccid'             => 'Iccid',
        'listMsisdnsShrink' => 'ListMsisdns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->listMsisdnsShrink) {
            $res['ListMsisdns'] = $this->listMsisdnsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealNameStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['ListMsisdns'])) {
            $model->listMsisdnsShrink = $map['ListMsisdns'];
        }

        return $model;
    }
}
