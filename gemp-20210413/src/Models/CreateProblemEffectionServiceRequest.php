<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateProblemEffectionServiceRequest extends Model
{
    /**
     * @description clientToken
     *
     * @example e0b6735e-1a04-4d6b-a625-d2350612492c
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example erdwcdc
     *
     * @var string
     */
    public $description;

    /**
     * @example P2
     *
     * @var string
     */
    public $level;

    /**
     * @var string[]
     */
    public $pictureUrl;

    /**
     * @example 150000000
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 170000000
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
        'clientToken' => 'clientToken',
        'description' => 'description',
        'level'       => 'level',
        'pictureUrl'  => 'pictureUrl',
        'problemId'   => 'problemId',
        'serviceId'   => 'serviceId',
        'status'      => 'status',
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
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->pictureUrl) {
            $res['pictureUrl'] = $this->pictureUrl;
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
     * @return CreateProblemEffectionServiceRequest
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
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['pictureUrl'])) {
            if (!empty($map['pictureUrl'])) {
                $model->pictureUrl = $map['pictureUrl'];
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
