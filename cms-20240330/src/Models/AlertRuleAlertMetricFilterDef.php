<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricFilterDef\supportedOpts;

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

    public function validate()
    {
        if (\is_array($this->supportedOpts)) {
            Model::validateArray($this->supportedOpts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->supportedOpts)) {
                $res['supportedOpts'] = [];
                $n1 = 0;
                foreach ($this->supportedOpts as $item1) {
                    $res['supportedOpts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['supportedOpts'] as $item1) {
                    $model->supportedOpts[$n1++] = supportedOpts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
