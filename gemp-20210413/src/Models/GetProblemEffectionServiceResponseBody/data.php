<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ew
     *
     * @var string
     */
    public $description;

    /**
     * @example 6442430
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @example P2
     *
     * @var int
     */
    public $level;

    /**
     * @var string[]
     */
    public $picUrl;

    /**
     * @example 170000000
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example 哈哈
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example UN_RECOVERED
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'description'        => 'description',
        'effectionServiceId' => 'effectionServiceId',
        'level'              => 'level',
        'picUrl'             => 'picUrl',
        'serviceId'          => 'serviceId',
        'serviceName'        => 'serviceName',
        'status'             => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
