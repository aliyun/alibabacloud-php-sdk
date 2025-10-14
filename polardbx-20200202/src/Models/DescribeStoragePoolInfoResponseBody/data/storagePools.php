<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStoragePoolInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class storagePools extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var string[]
     */
    public $dnIdList;

    /**
     * @var string
     */
    public $dnIdString;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $idleDNIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unDeletableDNId;
    protected $_name = [
        'class' => 'Class',
        'dnIdList' => 'DnIdList',
        'dnIdString' => 'DnIdString',
        'extra' => 'Extra',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'idleDNIdList' => 'IdleDNIdList',
        'name' => 'Name',
        'unDeletableDNId' => 'UnDeletableDNId',
    ];

    public function validate()
    {
        if (\is_array($this->dnIdList)) {
            Model::validateArray($this->dnIdList);
        }
        if (\is_array($this->idleDNIdList)) {
            Model::validateArray($this->idleDNIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->dnIdList) {
            if (\is_array($this->dnIdList)) {
                $res['DnIdList'] = [];
                $n1 = 0;
                foreach ($this->dnIdList as $item1) {
                    $res['DnIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dnIdString) {
            $res['DnIdString'] = $this->dnIdString;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->idleDNIdList) {
            if (\is_array($this->idleDNIdList)) {
                $res['IdleDNIdList'] = [];
                $n1 = 0;
                foreach ($this->idleDNIdList as $item1) {
                    $res['IdleDNIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->unDeletableDNId) {
            $res['UnDeletableDNId'] = $this->unDeletableDNId;
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
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['DnIdList'])) {
            if (!empty($map['DnIdList'])) {
                $model->dnIdList = [];
                $n1 = 0;
                foreach ($map['DnIdList'] as $item1) {
                    $model->dnIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DnIdString'])) {
            $model->dnIdString = $map['DnIdString'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IdleDNIdList'])) {
            if (!empty($map['IdleDNIdList'])) {
                $model->idleDNIdList = [];
                $n1 = 0;
                foreach ($map['IdleDNIdList'] as $item1) {
                    $model->idleDNIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UnDeletableDNId'])) {
            $model->unDeletableDNId = $map['UnDeletableDNId'];
        }

        return $model;
    }
}
