<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class CertificateQualityResponseBody extends Model
{
    /**
     * @var string
     */
    public $containSeal;

    /**
     * @var string
     */
    public $containWatermark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $copy;

    /**
     * @var string
     */
    public $complete;

    /**
     * @var string
     */
    public $nationalEmblem;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $reflection;

    /**
     * @var string
     */
    public $electronic;

    /**
     * @var string
     */
    public $containFront;

    /**
     * @var string
     */
    public $textClarity;
    protected $_name = [
        'containSeal'      => 'ContainSeal',
        'containWatermark' => 'ContainWatermark',
        'requestId'        => 'RequestId',
        'copy'             => 'Copy',
        'complete'         => 'Complete',
        'nationalEmblem'   => 'NationalEmblem',
        'targetType'       => 'TargetType',
        'reflection'       => 'Reflection',
        'electronic'       => 'Electronic',
        'containFront'     => 'ContainFront',
        'textClarity'      => 'TextClarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containSeal) {
            $res['ContainSeal'] = $this->containSeal;
        }
        if (null !== $this->containWatermark) {
            $res['ContainWatermark'] = $this->containWatermark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->copy) {
            $res['Copy'] = $this->copy;
        }
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }
        if (null !== $this->nationalEmblem) {
            $res['NationalEmblem'] = $this->nationalEmblem;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->reflection) {
            $res['Reflection'] = $this->reflection;
        }
        if (null !== $this->electronic) {
            $res['Electronic'] = $this->electronic;
        }
        if (null !== $this->containFront) {
            $res['ContainFront'] = $this->containFront;
        }
        if (null !== $this->textClarity) {
            $res['TextClarity'] = $this->textClarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificateQualityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainSeal'])) {
            $model->containSeal = $map['ContainSeal'];
        }
        if (isset($map['ContainWatermark'])) {
            $model->containWatermark = $map['ContainWatermark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Copy'])) {
            $model->copy = $map['Copy'];
        }
        if (isset($map['Complete'])) {
            $model->complete = $map['Complete'];
        }
        if (isset($map['NationalEmblem'])) {
            $model->nationalEmblem = $map['NationalEmblem'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Reflection'])) {
            $model->reflection = $map['Reflection'];
        }
        if (isset($map['Electronic'])) {
            $model->electronic = $map['Electronic'];
        }
        if (isset($map['ContainFront'])) {
            $model->containFront = $map['ContainFront'];
        }
        if (isset($map['TextClarity'])) {
            $model->textClarity = $map['TextClarity'];
        }

        return $model;
    }
}
