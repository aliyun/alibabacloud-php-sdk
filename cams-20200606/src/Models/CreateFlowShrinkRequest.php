<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoriesShrink;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $flowName;
    protected $_name = [
        'categoriesShrink' => 'Categories',
        'custSpaceId' => 'CustSpaceId',
        'flowName' => 'FlowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoriesShrink) {
            $res['Categories'] = $this->categoriesShrink;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
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
        if (isset($map['Categories'])) {
            $model->categoriesShrink = $map['Categories'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
