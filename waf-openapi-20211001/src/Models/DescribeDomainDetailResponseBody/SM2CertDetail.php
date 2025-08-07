<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Dara\Model;

class SM2CertDetail extends Model
{
    /**
     * @var string
     */
    public $commonName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $sans;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'commonName' => 'CommonName',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'name' => 'Name',
        'sans' => 'Sans',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->sans)) {
            Model::validateArray($this->sans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sans) {
            if (\is_array($this->sans)) {
                $res['Sans'] = [];
                $n1 = 0;
                foreach ($this->sans as $item1) {
                    $res['Sans'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Sans'])) {
            if (!empty($map['Sans'])) {
                $model->sans = [];
                $n1 = 0;
                foreach ($map['Sans'] as $item1) {
                    $model->sans[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
