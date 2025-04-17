<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\logoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\terrorismResult;

class videoResult extends Model
{
    /**
     * @var adResult
     */
    public $adResult;

    /**
     * @var string
     */
    public $label;

    /**
     * @var liveResult
     */
    public $liveResult;

    /**
     * @var logoResult
     */
    public $logoResult;

    /**
     * @var pornResult
     */
    public $pornResult;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var terrorismResult
     */
    public $terrorismResult;
    protected $_name = [
        'adResult' => 'AdResult',
        'label' => 'Label',
        'liveResult' => 'LiveResult',
        'logoResult' => 'LogoResult',
        'pornResult' => 'PornResult',
        'suggestion' => 'Suggestion',
        'terrorismResult' => 'TerrorismResult',
    ];

    public function validate()
    {
        if (null !== $this->adResult) {
            $this->adResult->validate();
        }
        if (null !== $this->liveResult) {
            $this->liveResult->validate();
        }
        if (null !== $this->logoResult) {
            $this->logoResult->validate();
        }
        if (null !== $this->pornResult) {
            $this->pornResult->validate();
        }
        if (null !== $this->terrorismResult) {
            $this->terrorismResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adResult) {
            $res['AdResult'] = null !== $this->adResult ? $this->adResult->toArray($noStream) : $this->adResult;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->liveResult) {
            $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toArray($noStream) : $this->liveResult;
        }

        if (null !== $this->logoResult) {
            $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toArray($noStream) : $this->logoResult;
        }

        if (null !== $this->pornResult) {
            $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toArray($noStream) : $this->pornResult;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->terrorismResult) {
            $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toArray($noStream) : $this->terrorismResult;
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
        if (isset($map['AdResult'])) {
            $model->adResult = adResult::fromMap($map['AdResult']);
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LiveResult'])) {
            $model->liveResult = liveResult::fromMap($map['LiveResult']);
        }

        if (isset($map['LogoResult'])) {
            $model->logoResult = logoResult::fromMap($map['LogoResult']);
        }

        if (isset($map['PornResult'])) {
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TerrorismResult'])) {
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }

        return $model;
    }
}
