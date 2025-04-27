<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateKibanaPvlNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var string
     */
    public $pvlId;
    protected $_name = [
        'endpointName' => 'endpointName',
        'securityGroups' => 'securityGroups',
        'pvlId' => 'pvlId',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['securityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['securityGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pvlId) {
            $res['pvlId'] = $this->pvlId;
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
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }

        if (isset($map['securityGroups'])) {
            if (!empty($map['securityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['securityGroups'] as $item1) {
                    $model->securityGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pvlId'])) {
            $model->pvlId = $map['pvlId'];
        }

        return $model;
    }
}
