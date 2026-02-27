<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody\data\results;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'confidence' => 'Confidence',
        'description' => 'Description',
        'label' => 'Label',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
