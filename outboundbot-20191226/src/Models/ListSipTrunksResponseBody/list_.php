<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSipTrunksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSipTrunksResponseBody\list_\ips;

class list_ extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var ips[]
     */
    public $ips;

    /**
     * @var string
     */
    public $trunkId;

    /**
     * @var string
     */
    public $trunkName;
    protected $_name = [
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'ips' => 'Ips',
        'trunkId' => 'TrunkId',
        'trunkName' => 'TrunkName',
    ];

    public function validate()
    {
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trunkId) {
            $res['TrunkId'] = $this->trunkId;
        }

        if (null !== $this->trunkName) {
            $res['TrunkName'] = $this->trunkName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1] = ips::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrunkId'])) {
            $model->trunkId = $map['TrunkId'];
        }

        if (isset($map['TrunkName'])) {
            $model->trunkName = $map['TrunkName'];
        }

        return $model;
    }
}
