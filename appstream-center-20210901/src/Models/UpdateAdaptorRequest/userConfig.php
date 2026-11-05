<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAdaptorRequest;

use AlibabaCloud\Dara\Model;

class userConfig extends Model
{
    /**
     * @var string
     */
    public $disconnectAction;

    /**
     * @var string
     */
    public $fixedResolution;

    /**
     * @var string
     */
    public $showWindow;
    protected $_name = [
        'disconnectAction' => 'DisconnectAction',
        'fixedResolution' => 'FixedResolution',
        'showWindow' => 'ShowWindow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disconnectAction) {
            $res['DisconnectAction'] = $this->disconnectAction;
        }

        if (null !== $this->fixedResolution) {
            $res['FixedResolution'] = $this->fixedResolution;
        }

        if (null !== $this->showWindow) {
            $res['ShowWindow'] = $this->showWindow;
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
        if (isset($map['DisconnectAction'])) {
            $model->disconnectAction = $map['DisconnectAction'];
        }

        if (isset($map['FixedResolution'])) {
            $model->fixedResolution = $map['FixedResolution'];
        }

        if (isset($map['ShowWindow'])) {
            $model->showWindow = $map['ShowWindow'];
        }

        return $model;
    }
}
