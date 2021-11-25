<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $facesShrink;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $remarksA;

    /**
     * @var string
     */
    public $remarksArrayA;

    /**
     * @var string
     */
    public $remarksArrayB;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $sourcePosition;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceUri;
    protected $_name = [
        'externalId'     => 'ExternalId',
        'facesShrink'    => 'Faces',
        'imageUri'       => 'ImageUri',
        'project'        => 'Project',
        'remarksA'       => 'RemarksA',
        'remarksArrayA'  => 'RemarksArrayA',
        'remarksArrayB'  => 'RemarksArrayB',
        'remarksB'       => 'RemarksB',
        'remarksC'       => 'RemarksC',
        'remarksD'       => 'RemarksD',
        'setId'          => 'SetId',
        'sourcePosition' => 'SourcePosition',
        'sourceType'     => 'SourceType',
        'sourceUri'      => 'SourceUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->facesShrink) {
            $res['Faces'] = $this->facesShrink;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->remarksArrayA) {
            $res['RemarksArrayA'] = $this->remarksArrayA;
        }
        if (null !== $this->remarksArrayB) {
            $res['RemarksArrayB'] = $this->remarksArrayB;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->sourcePosition) {
            $res['SourcePosition'] = $this->sourcePosition;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['Faces'])) {
            $model->facesShrink = $map['Faces'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['RemarksArrayA'])) {
            $model->remarksArrayA = $map['RemarksArrayA'];
        }
        if (isset($map['RemarksArrayB'])) {
            $model->remarksArrayB = $map['RemarksArrayB'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['SourcePosition'])) {
            $model->sourcePosition = $map['SourcePosition'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }

        return $model;
    }
}
