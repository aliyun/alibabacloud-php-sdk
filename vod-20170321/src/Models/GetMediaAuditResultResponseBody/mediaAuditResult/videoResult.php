<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\logoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\terrorismResult;
use AlibabaCloud\Tea\Model;

class videoResult extends Model
{
    /**
     * @description The URL of the image.
     *
     * @var adResult
     */
    public $adResult;

    /**
     * @description Details of image review results.
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **normal**
     * - **bloody**
     * - **explosion**
     * - **outfit**
     * - **logo**
     * - **weapon**
     * - **politics**
     * - **violence**
     * - **crowd**
     * - **parade**
     * - **carcrash**
     * - **flag**
     * - **location**
     * - **others**
     * @var liveResult
     */
    public $liveResult;

    /**
     * @description The recommendation for review results.
     *
     * @var logoResult
     */
    public $logoResult;

    /**
     * @description The average score of the review results.
     *
     * @var pornResult
     */
    public $pornResult;

    /**
     * @description The category of the review result.
     *
     * - **logo**
     * - **normal**
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @var terrorismResult
     */
    public $terrorismResult;
    protected $_name = [
        'adResult'        => 'AdResult',
        'label'           => 'Label',
        'liveResult'      => 'LiveResult',
        'logoResult'      => 'LogoResult',
        'pornResult'      => 'PornResult',
        'suggestion'      => 'Suggestion',
        'terrorismResult' => 'TerrorismResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adResult) {
            $res['AdResult'] = null !== $this->adResult ? $this->adResult->toMap() : null;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->liveResult) {
            $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toMap() : null;
        }
        if (null !== $this->logoResult) {
            $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toMap() : null;
        }
        if (null !== $this->pornResult) {
            $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->terrorismResult) {
            $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
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
