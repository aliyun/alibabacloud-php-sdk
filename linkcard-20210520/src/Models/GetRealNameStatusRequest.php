<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetRealNameStatusRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string[]
     */
    public $listMsisdns;
    protected $_name = [
        'iccid'       => 'Iccid',
        'listMsisdns' => 'ListMsisdns',
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
        if (null !== $this->listMsisdns) {
            $res['ListMsisdns'] = $this->listMsisdns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealNameStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['ListMsisdns'])) {
            if (!empty($map['ListMsisdns'])) {
                $model->listMsisdns = $map['ListMsisdns'];
            }
        }

        return $model;
    }
}
