<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets;

use AlibabaCloud\Dara\Model;

class certDetail extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'endTime' => 'EndTime',
        'issuer' => 'Issuer',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->domainNames)) {
            Model::validateArray($this->domainNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            if (\is_array($this->domainNames)) {
                $res['DomainNames'] = [];
                $n1 = 0;
                foreach ($this->domainNames as $item1) {
                    $res['DomainNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = [];
                $n1 = 0;
                foreach ($map['DomainNames'] as $item1) {
                    $model->domainNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
