<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetOSSFlowStatisResponseBody;

use AlibabaCloud\Dara\Model;

class OSSFlowStatisList extends Model
{
    /**
     * @var int
     */
    public $networkOut;

    /**
     * @var string
     */
    public $statTime;

    /**
     * @var string
     */
    public $statTimeUTC;
    protected $_name = [
        'networkOut' => 'NetworkOut',
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkOut) {
            $res['NetworkOut'] = $this->networkOut;
        }

        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
        }

        if (null !== $this->statTimeUTC) {
            $res['StatTimeUTC'] = $this->statTimeUTC;
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
        if (isset($map['NetworkOut'])) {
            $model->networkOut = $map['NetworkOut'];
        }

        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        if (isset($map['StatTimeUTC'])) {
            $model->statTimeUTC = $map['StatTimeUTC'];
        }

        return $model;
    }
}
