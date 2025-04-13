<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\UploadIndustryDeviceDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $measurePoint;

    /**
     * @var string
     */
    public $node;
    protected $_name = [
        'errorMsg' => 'ErrorMsg',
        'measurePoint' => 'MeasurePoint',
        'node' => 'Node',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->measurePoint) {
            $res['MeasurePoint'] = $this->measurePoint;
        }

        if (null !== $this->node) {
            $res['Node'] = $this->node;
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
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['MeasurePoint'])) {
            $model->measurePoint = $map['MeasurePoint'];
        }

        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        return $model;
    }
}
