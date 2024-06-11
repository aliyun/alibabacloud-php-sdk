<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\Tea\Model;

class ManageAccessorDomainWhiteListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $caller;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $domains;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'caller'    => 'Caller',
        'domains'   => 'Domains',
        'endTime'   => 'EndTime',
        'operation' => 'Operation',
        'remark'    => 'Remark',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageAccessorDomainWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
