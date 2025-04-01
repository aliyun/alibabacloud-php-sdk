<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class ReportBizAlertInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertDescription;

    /**
     * @var string
     */
    public $alertDetail;

    /**
     * @var string
     */
    public $alertGrade;

    /**
     * @var string
     */
    public $alertLabels;

    /**
     * @var string
     */
    public $alertScene;

    /**
     * @var string
     */
    public $alertToken;

    /**
     * @var string
     */
    public $alertUidShrink;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'alertDescription' => 'AlertDescription',
        'alertDetail' => 'AlertDetail',
        'alertGrade' => 'AlertGrade',
        'alertLabels' => 'AlertLabels',
        'alertScene' => 'AlertScene',
        'alertToken' => 'AlertToken',
        'alertUidShrink' => 'AlertUid',
        'language' => 'Language',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertDescription) {
            $res['AlertDescription'] = $this->alertDescription;
        }

        if (null !== $this->alertDetail) {
            $res['AlertDetail'] = $this->alertDetail;
        }

        if (null !== $this->alertGrade) {
            $res['AlertGrade'] = $this->alertGrade;
        }

        if (null !== $this->alertLabels) {
            $res['AlertLabels'] = $this->alertLabels;
        }

        if (null !== $this->alertScene) {
            $res['AlertScene'] = $this->alertScene;
        }

        if (null !== $this->alertToken) {
            $res['AlertToken'] = $this->alertToken;
        }

        if (null !== $this->alertUidShrink) {
            $res['AlertUid'] = $this->alertUidShrink;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (isset($map['AlertDescription'])) {
            $model->alertDescription = $map['AlertDescription'];
        }

        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }

        if (isset($map['AlertGrade'])) {
            $model->alertGrade = $map['AlertGrade'];
        }

        if (isset($map['AlertLabels'])) {
            $model->alertLabels = $map['AlertLabels'];
        }

        if (isset($map['AlertScene'])) {
            $model->alertScene = $map['AlertScene'];
        }

        if (isset($map['AlertToken'])) {
            $model->alertToken = $map['AlertToken'];
        }

        if (isset($map['AlertUid'])) {
            $model->alertUidShrink = $map['AlertUid'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
