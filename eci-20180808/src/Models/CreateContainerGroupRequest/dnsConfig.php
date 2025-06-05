<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\dnsConfig\option;

class dnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $nameServer;

    /**
     * @var option[]
     */
    public $option;

    /**
     * @var string[]
     */
    public $search;
    protected $_name = [
        'nameServer' => 'NameServer',
        'option' => 'Option',
        'search' => 'Search',
    ];

    public function validate()
    {
        if (\is_array($this->nameServer)) {
            Model::validateArray($this->nameServer);
        }
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        if (\is_array($this->search)) {
            Model::validateArray($this->search);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameServer) {
            if (\is_array($this->nameServer)) {
                $res['NameServer'] = [];
                $n1 = 0;
                foreach ($this->nameServer as $item1) {
                    $res['NameServer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['Option'] = [];
                $n1 = 0;
                foreach ($this->option as $item1) {
                    $res['Option'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->search) {
            if (\is_array($this->search)) {
                $res['Search'] = [];
                $n1 = 0;
                foreach ($this->search as $item1) {
                    $res['Search'][$n1++] = $item1;
                }
            }
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
        if (isset($map['NameServer'])) {
            if (!empty($map['NameServer'])) {
                $model->nameServer = [];
                $n1 = 0;
                foreach ($map['NameServer'] as $item1) {
                    $model->nameServer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                $n1 = 0;
                foreach ($map['Option'] as $item1) {
                    $model->option[$n1++] = option::fromMap($item1);
                }
            }
        }

        if (isset($map['Search'])) {
            if (!empty($map['Search'])) {
                $model->search = [];
                $n1 = 0;
                foreach ($map['Search'] as $item1) {
                    $model->search[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
