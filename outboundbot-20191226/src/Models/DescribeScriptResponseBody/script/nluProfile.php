<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptResponseBody\script;

use AlibabaCloud\Dara\Model;

class nluProfile extends Model
{
    /**
     * @var string
     */
    public $fcFunction;

    /**
     * @var string
     */
    public $fcHttpTriggerUrl;

    /**
     * @var string
     */
    public $fcRegion;
    protected $_name = [
        'fcFunction' => 'FcFunction',
        'fcHttpTriggerUrl' => 'FcHttpTriggerUrl',
        'fcRegion' => 'FcRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcFunction) {
            $res['FcFunction'] = $this->fcFunction;
        }

        if (null !== $this->fcHttpTriggerUrl) {
            $res['FcHttpTriggerUrl'] = $this->fcHttpTriggerUrl;
        }

        if (null !== $this->fcRegion) {
            $res['FcRegion'] = $this->fcRegion;
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
        if (isset($map['FcFunction'])) {
            $model->fcFunction = $map['FcFunction'];
        }

        if (isset($map['FcHttpTriggerUrl'])) {
            $model->fcHttpTriggerUrl = $map['FcHttpTriggerUrl'];
        }

        if (isset($map['FcRegion'])) {
            $model->fcRegion = $map['FcRegion'];
        }

        return $model;
    }
}
