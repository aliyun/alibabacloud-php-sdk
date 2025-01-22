<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponseBody;

use AlibabaCloud\Dara\Model;

class imvInfos extends Model
{
    /**
     * @var string
     */
    public $base;
    /**
     * @var string
     */
    public $detailInfo;
    /**
     * @var string
     */
    public $MV;
    protected $_name = [
        'base'       => 'Base',
        'detailInfo' => 'DetailInfo',
        'MV'         => 'MV',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->base) {
            $res['Base'] = $this->base;
        }

        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = $this->detailInfo;
        }

        if (null !== $this->MV) {
            $res['MV'] = $this->MV;
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
        if (isset($map['Base'])) {
            $model->base = $map['Base'];
        }

        if (isset($map['DetailInfo'])) {
            $model->detailInfo = $map['DetailInfo'];
        }

        if (isset($map['MV'])) {
            $model->MV = $map['MV'];
        }

        return $model;
    }
}
