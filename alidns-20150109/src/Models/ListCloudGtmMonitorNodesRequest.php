<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class ListCloudGtmMonitorNodesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $showDisabledNodes;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'showDisabledNodes' => 'ShowDisabledNodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->showDisabledNodes) {
            $res['ShowDisabledNodes'] = $this->showDisabledNodes;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ShowDisabledNodes'])) {
            $model->showDisabledNodes = $map['ShowDisabledNodes'];
        }

        return $model;
    }
}
