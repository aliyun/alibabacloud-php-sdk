<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryDauReportDataResponseBody;

use AlibabaCloud\Dara\Model;

class dauReportDataModel extends Model
{
    /**
     * @var int
     */
    public $dau;

    /**
     * @var string
     */
    public $statDate;

    /**
     * @var int
     */
    public $streamingDau;
    protected $_name = [
        'dau' => 'Dau',
        'statDate' => 'StatDate',
        'streamingDau' => 'StreamingDau',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dau) {
            $res['Dau'] = $this->dau;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
        }

        if (null !== $this->streamingDau) {
            $res['StreamingDau'] = $this->streamingDau;
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
        if (isset($map['Dau'])) {
            $model->dau = $map['Dau'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        if (isset($map['StreamingDau'])) {
            $model->streamingDau = $map['StreamingDau'];
        }

        return $model;
    }
}
