<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline\trackList\track\clips;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline\trackList\track\clips\clip\clipsConfig;
use AlibabaCloud\Tea\Model;

class clip extends Model
{
    /**
     * @var string
     */
    public $clipID;

    /**
     * @var string
     */
    public $in;

    /**
     * @var string
     */
    public $out;

    /**
     * @var clipsConfig
     */
    public $clipsConfig;
    protected $_name = [
        'clipID'      => 'clipID',
        'in'          => 'In',
        'out'         => 'Out',
        'clipsConfig' => 'ClipsConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipID) {
            $res['clipID'] = $this->clipID;
        }
        if (null !== $this->in) {
            $res['In'] = $this->in;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->clipsConfig) {
            $res['ClipsConfig'] = null !== $this->clipsConfig ? $this->clipsConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clipID'])) {
            $model->clipID = $map['clipID'];
        }
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['ClipsConfig'])) {
            $model->clipsConfig = clipsConfig::fromMap($map['ClipsConfig']);
        }

        return $model;
    }
}
