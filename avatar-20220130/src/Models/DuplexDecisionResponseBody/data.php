<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $grabType;

    /**
     * @var string
     */
    public $outputText;
    protected $_name = [
        'actionType' => 'ActionType',
        'grabType'   => 'GrabType',
        'outputText' => 'OutputText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->grabType) {
            $res['GrabType'] = $this->grabType;
        }
        if (null !== $this->outputText) {
            $res['OutputText'] = $this->outputText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['GrabType'])) {
            $model->grabType = $map['GrabType'];
        }
        if (isset($map['OutputText'])) {
            $model->outputText = $map['OutputText'];
        }

        return $model;
    }
}
