<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSResponseBody\privateDNSList\records;

class privateDNSList extends Model
{
    /**
     * @var string[]
     */
    public $bindInstances;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindInstances' => 'BindInstances',
        'createdTime' => 'CreatedTime',
        'intranetDomain' => 'IntranetDomain',
        'records' => 'Records',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->bindInstances)) {
            Model::validateArray($this->bindInstances);
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindInstances) {
            if (\is_array($this->bindInstances)) {
                $res['BindInstances'] = [];
                $n1 = 0;
                foreach ($this->bindInstances as $item1) {
                    $res['BindInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BindInstances'])) {
            if (!empty($map['BindInstances'])) {
                $model->bindInstances = [];
                $n1 = 0;
                foreach ($map['BindInstances'] as $item1) {
                    $model->bindInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
