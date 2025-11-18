<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionSamplesResponseBody\samples;

use AlibabaCloud\Dara\Model;

class sample extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $sampleId;
    protected $_name = [
        'entityId' => 'EntityId',
        'imageUrl' => 'ImageUrl',
        'libId' => 'LibId',
        'sampleId' => 'SampleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }

        return $model;
    }
}
