<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobRequest\output;
use AlibabaCloud\Tea\Model;

class SubmitTraceAbJobRequest extends Model
{
    /**
     * @example Qh6OdgIMcliQSI1fReOw****
     *
     * @var string
     */
    public $cipherBase64ed;

    /**
     * @description This parameter is required.
     *
     * @var input
     */
    public $input;

    /**
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description This parameter is required.
     *
     * @var output
     */
    public $output;

    /**
     * @example 0
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 360
     *
     * @var string
     */
    public $totalTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cipherBase64ed' => 'CipherBase64ed',
        'input'          => 'Input',
        'level'          => 'Level',
        'output'         => 'Output',
        'startTime'      => 'StartTime',
        'totalTime'      => 'TotalTime',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherBase64ed) {
            $res['CipherBase64ed'] = $this->cipherBase64ed;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTraceAbJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CipherBase64ed'])) {
            $model->cipherBase64ed = $map['CipherBase64ed'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
