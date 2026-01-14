<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;

use AlibabaCloud\Dara\Model;

class ipSets extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $ipSetId;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'ipSetId' => 'IpSetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }

        return $model;
    }
}
