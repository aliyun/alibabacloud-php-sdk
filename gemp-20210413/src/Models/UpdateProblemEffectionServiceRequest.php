<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemEffectionServiceRequest extends Model
{
    /**
     * @description clientToken
     *
     * @example c26f36de-1ec8-496a-a828-880676c5ef81
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 乐嘉国际大厦
     *
     * @var string
     */
    public $description;

    /**
     * @example 103
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @example P1
     *
     * @var string
     */
    public $level;

    /**
     * @var string[]
     */
    public $picUrl;

    /**
     * @example 190000000
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 33
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example UN_RECOVERED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'description'        => 'description',
        'effectionServiceId' => 'effectionServiceId',
        'level'              => 'level',
        'picUrl'             => 'picUrl',
        'problemId'          => 'problemId',
        'serviceId'          => 'serviceId',
        'status'             => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemEffectionServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['picUrl'])) {
            if (!empty($map['picUrl'])) {
                $model->picUrl = $map['picUrl'];
            }
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
