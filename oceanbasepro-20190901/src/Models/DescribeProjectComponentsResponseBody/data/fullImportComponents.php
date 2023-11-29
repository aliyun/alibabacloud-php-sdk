<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullImportComponents\errorDetails;
use AlibabaCloud\Tea\Model;

class fullImportComponents extends Model
{
    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example 2023-07-13T18:04:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-13T18:04:36
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example p_4w8v****
     *
     * @var string
     */
    public $identity;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example xxx.xxx.xxx.1-9000:connector_v2:np_4w8v****c-full_trans-1-0:0000000276
     *
     * @var string
     */
    public $name;

    /**
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorDetails' => 'ErrorDetails',
        'gmtCreate'    => 'GmtCreate',
        'gmtModify'    => 'GmtModify',
        'identity'     => 'Identity',
        'ip'           => 'Ip',
        'name'         => 'Name',
        'progress'     => 'Progress',
        'region'       => 'Region',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullImportComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
