<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricFilterDef\supportedOpts;
use AlibabaCloud\Tea\Model;

class AlertRuleAlertMetricFilterDef extends Model
{
    /**
     * @var string
     */
    public $dim;

    /**
     * @var bool
     */
    public $dimDisabled;

    /**
     * @var string
     */
    public $displayNameCn;

    /**
     * @var string
     */
    public $displayNameEn;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var bool
     */
    public $labelDisabled;

    /**
     * @var string
     */
    public $opt;

    /**
     * @var supportedOpts[]
     */
    public $supportedOpts;
    protected $_name = [
        'dim' => 'dim',
        'dimDisabled' => 'dimDisabled',
        'displayNameCn' => 'displayNameCn',
        'displayNameEn' => 'displayNameEn',
        'hidden' => 'hidden',
        'labelDisabled' => 'labelDisabled',
        'opt' => 'opt',
        'supportedOpts' => 'supportedOpts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dim) {
            $res['dim'] = $this->dim;
        }
        if (null !== $this->dimDisabled) {
            $res['dimDisabled'] = $this->dimDisabled;
        }
        if (null !== $this->displayNameCn) {
            $res['displayNameCn'] = $this->displayNameCn;
        }
        if (null !== $this->displayNameEn) {
            $res['displayNameEn'] = $this->displayNameEn;
        }
        if (null !== $this->hidden) {
            $res['hidden'] = $this->hidden;
        }
        if (null !== $this->labelDisabled) {
            $res['labelDisabled'] = $this->labelDisabled;
        }
        if (null !== $this->opt) {
            $res['opt'] = $this->opt;
        }
        if (null !== $this->supportedOpts) {
            $res['supportedOpts'] = [];
            if (null !== $this->supportedOpts && \is_array($this->supportedOpts)) {
                $n = 0;
                foreach ($this->supportedOpts as $item) {
                    $res['supportedOpts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleAlertMetricFilterDef
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dim'])) {
            $model->dim = $map['dim'];
        }
        if (isset($map['dimDisabled'])) {
            $model->dimDisabled = $map['dimDisabled'];
        }
        if (isset($map['displayNameCn'])) {
            $model->displayNameCn = $map['displayNameCn'];
        }
        if (isset($map['displayNameEn'])) {
            $model->displayNameEn = $map['displayNameEn'];
        }
        if (isset($map['hidden'])) {
            $model->hidden = $map['hidden'];
        }
        if (isset($map['labelDisabled'])) {
            $model->labelDisabled = $map['labelDisabled'];
        }
        if (isset($map['opt'])) {
            $model->opt = $map['opt'];
        }
        if (isset($map['supportedOpts'])) {
            if (!empty($map['supportedOpts'])) {
                $model->supportedOpts = [];
                $n = 0;
                foreach ($map['supportedOpts'] as $item) {
                    $model->supportedOpts[$n++] = null !== $item ? supportedOpts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
