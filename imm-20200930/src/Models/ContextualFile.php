<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ContextualFile extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var Element[]
     */
    public $elements;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $OSSURI;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'contentType' => 'ContentType',
        'datasetName' => 'DatasetName',
        'elements' => 'Elements',
        'mediaType' => 'MediaType',
        'OSSURI' => 'OSSURI',
        'objectId' => 'ObjectId',
        'ownerId' => 'OwnerId',
        'projectName' => 'ProjectName',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['Elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['Elements'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->OSSURI) {
            $res['OSSURI'] = $this->OSSURI;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['Elements'] as $item1) {
                    $model->elements[$n1++] = Element::fromMap($item1);
                }
            }
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['OSSURI'])) {
            $model->OSSURI = $map['OSSURI'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
