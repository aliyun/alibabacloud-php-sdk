<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateVulScanGlobalConfigShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $maxDownloadSpeed;

    /**
     * @var string
     */
    public $wuyingVulFixConfigShrink;
    protected $_name = [
        'maxDownloadSpeed' => 'MaxDownloadSpeed',
        'wuyingVulFixConfigShrink' => 'WuyingVulFixConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDownloadSpeed) {
            $res['MaxDownloadSpeed'] = $this->maxDownloadSpeed;
        }

        if (null !== $this->wuyingVulFixConfigShrink) {
            $res['WuyingVulFixConfig'] = $this->wuyingVulFixConfigShrink;
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
        if (isset($map['MaxDownloadSpeed'])) {
            $model->maxDownloadSpeed = $map['MaxDownloadSpeed'];
        }

        if (isset($map['WuyingVulFixConfig'])) {
            $model->wuyingVulFixConfigShrink = $map['WuyingVulFixConfig'];
        }

        return $model;
    }
}
