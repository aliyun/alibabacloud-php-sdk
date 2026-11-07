<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QuerySessionDataResponseBody;

use AlibabaCloud\Dara\Model;

class indexData extends Model
{
    /**
     * @var string
     */
    public $hh;

    /**
     * @var string
     */
    public $mi;

    /**
     * @var int
     */
    public $sessionCntMi;

    /**
     * @var string
     */
    public $statDate;
    protected $_name = [
        'hh' => 'Hh',
        'mi' => 'Mi',
        'sessionCntMi' => 'SessionCntMi',
        'statDate' => 'StatDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hh) {
            $res['Hh'] = $this->hh;
        }

        if (null !== $this->mi) {
            $res['Mi'] = $this->mi;
        }

        if (null !== $this->sessionCntMi) {
            $res['SessionCntMi'] = $this->sessionCntMi;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
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
        if (isset($map['Hh'])) {
            $model->hh = $map['Hh'];
        }

        if (isset($map['Mi'])) {
            $model->mi = $map['Mi'];
        }

        if (isset($map['SessionCntMi'])) {
            $model->sessionCntMi = $map['SessionCntMi'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        return $model;
    }
}
