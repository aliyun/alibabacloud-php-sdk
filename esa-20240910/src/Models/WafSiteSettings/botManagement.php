<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement\definiteBots;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement\effectOnStatic;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement\JSDetection;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement\likelyBots;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings\botManagement\verifiedBots;
use AlibabaCloud\Tea\Model;

class botManagement extends Model
{
    /**
     * @var definiteBots
     */
    public $definiteBots;

    /**
     * @var effectOnStatic
     */
    public $effectOnStatic;

    /**
     * @var JSDetection
     */
    public $JSDetection;

    /**
     * @var likelyBots
     */
    public $likelyBots;

    /**
     * @var verifiedBots
     */
    public $verifiedBots;
    protected $_name = [
        'definiteBots' => 'DefiniteBots',
        'effectOnStatic' => 'EffectOnStatic',
        'JSDetection' => 'JSDetection',
        'likelyBots' => 'LikelyBots',
        'verifiedBots' => 'VerifiedBots',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->definiteBots) {
            $res['DefiniteBots'] = null !== $this->definiteBots ? $this->definiteBots->toMap() : null;
        }
        if (null !== $this->effectOnStatic) {
            $res['EffectOnStatic'] = null !== $this->effectOnStatic ? $this->effectOnStatic->toMap() : null;
        }
        if (null !== $this->JSDetection) {
            $res['JSDetection'] = null !== $this->JSDetection ? $this->JSDetection->toMap() : null;
        }
        if (null !== $this->likelyBots) {
            $res['LikelyBots'] = null !== $this->likelyBots ? $this->likelyBots->toMap() : null;
        }
        if (null !== $this->verifiedBots) {
            $res['VerifiedBots'] = null !== $this->verifiedBots ? $this->verifiedBots->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return botManagement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefiniteBots'])) {
            $model->definiteBots = definiteBots::fromMap($map['DefiniteBots']);
        }
        if (isset($map['EffectOnStatic'])) {
            $model->effectOnStatic = effectOnStatic::fromMap($map['EffectOnStatic']);
        }
        if (isset($map['JSDetection'])) {
            $model->JSDetection = JSDetection::fromMap($map['JSDetection']);
        }
        if (isset($map['LikelyBots'])) {
            $model->likelyBots = likelyBots::fromMap($map['LikelyBots']);
        }
        if (isset($map['VerifiedBots'])) {
            $model->verifiedBots = verifiedBots::fromMap($map['VerifiedBots']);
        }

        return $model;
    }
}
