<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class PutDataEventSelectorResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataEventSelectors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trailArn;
    protected $_name = [
        'dataEventSelectors' => 'DataEventSelectors',
        'requestId' => 'RequestId',
        'trailArn' => 'TrailArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEventSelectors) {
            $res['DataEventSelectors'] = $this->dataEventSelectors;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
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
        if (isset($map['DataEventSelectors'])) {
            $model->dataEventSelectors = $map['DataEventSelectors'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }

        return $model;
    }
}
