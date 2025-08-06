<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\CreateMediaDNALibResponseBody;

use AlibabaCloud\Dara\Model;

class AIDNALibInfo extends Model
{
    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'fpDBId' => 'FpDBId',
        'modelType' => 'ModelType',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
