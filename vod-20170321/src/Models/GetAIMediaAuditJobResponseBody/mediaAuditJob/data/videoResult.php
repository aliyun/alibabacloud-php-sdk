<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\logoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\terrorismResult;
use AlibabaCloud\Tea\Model;

class videoResult extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var terrorismResult
     */
    public $terrorismResult;

    /**
     * @var pornResult
     */
    public $pornResult;

    /**
     * @var adResult
     */
    public $adResult;

    /**
     * @var liveResult
     */
    public $liveResult;

    /**
     * @var logoResult
     */
    public $logoResult;
    protected $_name = [
        'label'           => 'Label',
        'suggestion'      => 'Suggestion',
        'terrorismResult' => 'TerrorismResult',
        'pornResult'      => 'PornResult',
        'adResult'        => 'AdResult',
        'liveResult'      => 'LiveResult',
        'logoResult'      => 'LogoResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->terrorismResult) {
            $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
        }
        if (null !== $this->pornResult) {
            $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        }
        if (null !== $this->adResult) {
            $res['AdResult'] = null !== $this->adResult ? $this->adResult->toMap() : null;
        }
        if (null !== $this->liveResult) {
            $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toMap() : null;
        }
        if (null !== $this->logoResult) {
            $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TerrorismResult'])) {
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }
        if (isset($map['PornResult'])) {
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }
        if (isset($map['AdResult'])) {
            $model->adResult = adResult::fromMap($map['AdResult']);
        }
        if (isset($map['LiveResult'])) {
            $model->liveResult = liveResult::fromMap($map['LiveResult']);
        }
        if (isset($map['LogoResult'])) {
            $model->logoResult = logoResult::fromMap($map['LogoResult']);
        }

        return $model;
    }
}
