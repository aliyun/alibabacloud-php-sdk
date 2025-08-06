<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditResultResponseBody;

use AlibabaCloud\Dara\Model;

class AIAuditResult extends Model
{
    /**
     * @var string
     */
    public $abnormalModules;

    /**
     * @var string
     */
    public $coverResult;

    /**
     * @var string
     */
    public $imageResult;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $pornResult;

    /**
     * @var string
     */
    public $terrorismResult;

    /**
     * @var string
     */
    public $titleResult;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'coverResult' => 'CoverResult',
        'imageResult' => 'ImageResult',
        'label' => 'Label',
        'pornResult' => 'PornResult',
        'terrorismResult' => 'TerrorismResult',
        'titleResult' => 'TitleResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }

        if (null !== $this->coverResult) {
            $res['CoverResult'] = $this->coverResult;
        }

        if (null !== $this->imageResult) {
            $res['ImageResult'] = $this->imageResult;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->pornResult) {
            $res['PornResult'] = $this->pornResult;
        }

        if (null !== $this->terrorismResult) {
            $res['TerrorismResult'] = $this->terrorismResult;
        }

        if (null !== $this->titleResult) {
            $res['TitleResult'] = $this->titleResult;
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
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }

        if (isset($map['CoverResult'])) {
            $model->coverResult = $map['CoverResult'];
        }

        if (isset($map['ImageResult'])) {
            $model->imageResult = $map['ImageResult'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['PornResult'])) {
            $model->pornResult = $map['PornResult'];
        }

        if (isset($map['TerrorismResult'])) {
            $model->terrorismResult = $map['TerrorismResult'];
        }

        if (isset($map['TitleResult'])) {
            $model->titleResult = $map['TitleResult'];
        }

        return $model;
    }
}
