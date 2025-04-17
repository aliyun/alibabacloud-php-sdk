<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Codes extends Model
{
    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'boundary' => 'Boundary',
        'confidence' => 'Confidence',
        'content' => 'Content',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->boundary) {
            $this->boundary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toArray($noStream) : $this->boundary;
        }

        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }

        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
