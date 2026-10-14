<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults\aigc;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults\aips;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults\psLoc;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults\recap;

class baseResults extends Model
{
    /**
     * @var aigc
     */
    public $aigc;

    /**
     * @var aips
     */
    public $aips;

    /**
     * @var string
     */
    public $imgType;

    /**
     * @var psLoc
     */
    public $psLoc;

    /**
     * @var recap
     */
    public $recap;
    protected $_name = [
        'aigc' => 'Aigc',
        'aips' => 'Aips',
        'imgType' => 'ImgType',
        'psLoc' => 'PsLoc',
        'recap' => 'Recap',
    ];

    public function validate()
    {
        if (null !== $this->aigc) {
            $this->aigc->validate();
        }
        if (null !== $this->aips) {
            $this->aips->validate();
        }
        if (null !== $this->psLoc) {
            $this->psLoc->validate();
        }
        if (null !== $this->recap) {
            $this->recap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aigc) {
            $res['Aigc'] = null !== $this->aigc ? $this->aigc->toArray($noStream) : $this->aigc;
        }

        if (null !== $this->aips) {
            $res['Aips'] = null !== $this->aips ? $this->aips->toArray($noStream) : $this->aips;
        }

        if (null !== $this->imgType) {
            $res['ImgType'] = $this->imgType;
        }

        if (null !== $this->psLoc) {
            $res['PsLoc'] = null !== $this->psLoc ? $this->psLoc->toArray($noStream) : $this->psLoc;
        }

        if (null !== $this->recap) {
            $res['Recap'] = null !== $this->recap ? $this->recap->toArray($noStream) : $this->recap;
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
        if (isset($map['Aigc'])) {
            $model->aigc = aigc::fromMap($map['Aigc']);
        }

        if (isset($map['Aips'])) {
            $model->aips = aips::fromMap($map['Aips']);
        }

        if (isset($map['ImgType'])) {
            $model->imgType = $map['ImgType'];
        }

        if (isset($map['PsLoc'])) {
            $model->psLoc = psLoc::fromMap($map['PsLoc']);
        }

        if (isset($map['Recap'])) {
            $model->recap = recap::fromMap($map['Recap']);
        }

        return $model;
    }
}
