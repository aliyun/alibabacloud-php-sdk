<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceLivenessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2000000
     *
     * @var string
     */
    public $code;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example T
     *
     * @var string
     */
    public $passed;

    /**
     * @example d61be709-49d2-4cf1-b219-cd6181f72***
     *
     * @var string
     */
    public $publicId;

    /**
     * @example 3.24324324324
     *
     * @var float
     */
    public $score;

    /**
     * @example COMPLETED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'     => 'Code',
        'message'  => 'Message',
        'passed'   => 'Passed',
        'publicId' => 'PublicId',
        'score'    => 'Score',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->publicId) {
            $res['PublicId'] = $this->publicId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['PublicId'])) {
            $model->publicId = $map['PublicId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
