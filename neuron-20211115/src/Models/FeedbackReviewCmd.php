<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class FeedbackReviewCmd extends Model
{
    /**
     * @var string
     */
    public $feedbackPbcAPI;

    /**
     * @var string
     */
    public $feedbackPbcInstruction;

    /**
     * @var string
     */
    public $feedbackPbcSchema;

    /**
     * @var string
     */
    public $feedbackSecurity;

    /**
     * @var string
     */
    public $feedbackServiceAvailable;

    /**
     * @var int
     */
    public $reviewId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'feedbackPbcAPI' => 'feedbackPbcAPI',
        'feedbackPbcInstruction' => 'feedbackPbcInstruction',
        'feedbackPbcSchema' => 'feedbackPbcSchema',
        'feedbackSecurity' => 'feedbackSecurity',
        'feedbackServiceAvailable' => 'feedbackServiceAvailable',
        'reviewId' => 'reviewId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feedbackPbcAPI) {
            $res['feedbackPbcAPI'] = $this->feedbackPbcAPI;
        }

        if (null !== $this->feedbackPbcInstruction) {
            $res['feedbackPbcInstruction'] = $this->feedbackPbcInstruction;
        }

        if (null !== $this->feedbackPbcSchema) {
            $res['feedbackPbcSchema'] = $this->feedbackPbcSchema;
        }

        if (null !== $this->feedbackSecurity) {
            $res['feedbackSecurity'] = $this->feedbackSecurity;
        }

        if (null !== $this->feedbackServiceAvailable) {
            $res['feedbackServiceAvailable'] = $this->feedbackServiceAvailable;
        }

        if (null !== $this->reviewId) {
            $res['reviewId'] = $this->reviewId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['feedbackPbcAPI'])) {
            $model->feedbackPbcAPI = $map['feedbackPbcAPI'];
        }

        if (isset($map['feedbackPbcInstruction'])) {
            $model->feedbackPbcInstruction = $map['feedbackPbcInstruction'];
        }

        if (isset($map['feedbackPbcSchema'])) {
            $model->feedbackPbcSchema = $map['feedbackPbcSchema'];
        }

        if (isset($map['feedbackSecurity'])) {
            $model->feedbackSecurity = $map['feedbackSecurity'];
        }

        if (isset($map['feedbackServiceAvailable'])) {
            $model->feedbackServiceAvailable = $map['feedbackServiceAvailable'];
        }

        if (isset($map['reviewId'])) {
            $model->reviewId = $map['reviewId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
