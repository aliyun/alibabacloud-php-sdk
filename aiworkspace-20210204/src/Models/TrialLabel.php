<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class TrialLabel extends Model
{
    /**
     * @example 2023-12-27T03:30:04Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-12-27T03:30:04Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $trialId;

    /**
     * @example value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'key'             => 'Key',
        'trialId'         => 'TrialId',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->trialId) {
            $res['TrialId'] = $this->trialId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrialLabel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TrialId'])) {
            $model->trialId = $map['TrialId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
