<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\fullImportComponents\errorDetails;

class fullImportComponents extends Model
{
    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorDetails' => 'ErrorDetails',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'identity' => 'Identity',
        'ip' => 'Ip',
        'name' => 'Name',
        'progress' => 'Progress',
        'region' => 'Region',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorDetails) {
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1] = errorDetails::fromMap($item1);
                    ++$n1;
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
